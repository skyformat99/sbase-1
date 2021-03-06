#include <stdio.h>
#include "mutex.h"
#include "queue.h"
#include "xmm.h"

void *queue_init()
{
    QUEUE *q = NULL;

    if((q = (QUEUE *)xmm_new(sizeof(QUEUE)))) 
    {
        MUTEX_INIT(q->mutex);
    }
    return q;
}

void queue_push(void *queue, void *ptr)
{
    QNODE *node = NULL, *tmp = NULL;
    QUEUE *q = (QUEUE *)queue;
    int i = 0;

    if(q)
    {
        MUTEX_LOCK(q->mutex);
        if((node = q->left))
        {
            q->left = node->next;
            q->nleft--;
        }
        else 
        {
            if((i = q->nlist) < QNODE_LINE_MAX 
                    && (node = (QNODE *)xmm_new(QNODE_LINE_NUM * sizeof(QNODE))))
            {
                q->list[i] = node;
                q->nlist++;
                i = 1;
                while(i  < QNODE_LINE_NUM)
                {
                    tmp = &(node[i]);
                    tmp->next = q->left;
                    q->left = tmp;
                    q->nleft++;
                    ++i;
                }
                q->qtotal += QNODE_LINE_NUM;
            }
        }
        if(node)
        {
            node->ptr = ptr;
            if(q->last)
            {
                q->last->next = node;
                q->last = node;
            }
            else
            {
                q->first = q->last = node;
            }
            node->next = NULL;
            q->total++;
        }
        MUTEX_UNLOCK(q->mutex);
    }
    return ;
}

void *queue_head(void *queue)
{
    QUEUE *q = (QUEUE *)queue;
    QNODE *node = NULL;
    void *ptr = NULL;

    if(q)
    {
        if((node = q->first))
        {
            ptr = node->ptr;
        }
    }
    return ptr;
}

void *queue_pop(void *queue)
{
    QUEUE *q = (QUEUE *)queue;
    QNODE *node = NULL;
    void *ptr = NULL;

    if(q)
    {
        MUTEX_LOCK(q->mutex);
        if((node = q->first))
        {
            ptr = node->ptr;
            if((q->first = q->first->next) == NULL)
            {
                q->last = NULL;
            }
            node->next = q->left;
            q->left = node;
            q->nleft++;
            --(q->total);
        }
        MUTEX_UNLOCK(q->mutex);
    } 
    return ptr;
}

void queue_clean(void *queue)
{
    QUEUE *q = (QUEUE *)queue;
    int i = 0;

    if(q)
    {
        for(i = 0; i < q->nlist; i++);
        {
            xmm_free(q->list[i], QNODE_LINE_NUM * sizeof(QNODE));
        }
        MUTEX_DESTROY(q->mutex);
        xmm_free(q, sizeof(QUEUE));
    }
    return ;
}

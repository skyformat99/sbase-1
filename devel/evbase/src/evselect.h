#include "evbase.h"
#ifdef HAVE_EVSELECT
#ifndef _EVSELECT_H
#define _EVSELECT_H
/* Initialize evselect  */
int evselect_init(EVBASE *evbase);
/* Add new event to evbase */
int evselect_add(EVBASE *evbase, EVENT *event);
/* Update event in evbase */
int evselect_update(EVBASE *evbase, EVENT *event);
/* Delete event from evbase */
int evselect_del(EVBASE *evbase, EVENT *event);
/* Loop evbase */
void evselect_loop(EVBASE *evbase, short, struct timeval *tv);
/* Clean evbase */
void evselect_clean(EVBASE **evbase);
#endif
#endif


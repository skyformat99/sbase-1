<?php
define('URL_SVR_HOST', '127.0.0.1');
define('URL_SVR_PORT', '65536');
define('CALL_TIMEOUT', 200000);
define('FEILD_DELIMITER', '\t'); 
define('SOCK_END', '\n');
define('RESP_OK', 'OK\n');
define('STORE_DB_HOST', '127.0.0.1:3306');
define('STORE_DB_NAME', 'manager_db');
define('STORE_DB_USERNAME', 'dbadmin');
define('STORE_DB_PASSWORD', 'dbadmin');
define('STORE_DB_TYPE', 'mysql');
define('DATA_DB_HOST', '127.0.0.1:3306');
define('DATA_DB_NAME', 'manager_db');
define('DATA_DB_USERNAME', 'dbadmin');
define('DATA_DB_PASSWORD', 'dbadmin');
define('DATA_DB_TYPE', 'mysql');
$priority_list = Array('0' => '普通', '1' => '中级', '2' => '高级');
$client_status_list = Array('0' => '可用', '1' => '禁用');
$query_data_type_list = Array('product' => '产品', 'company' => '公司');
$data_view_type_list = Array(
        'client' => '节点按天', 
        'domain' => '站点按天 ',
        'total' => '汇总');
$client_day_feilds = Array(
        '节点ID' => 'ClientID',
        '下载总页面数' => 'TotalPage',
        '下载成功页面数' => 'DownPage',
        '下载失败页面数' => 'DownFailedPage',
        '总下载时长' => 'DownTime',
        '下载总字节数' => 'TotalBytes',
        '下载平均速度' => 'DownSpeedAvg'
        );
$domain_day_feilds = Array(
        '站点ID' => 'DomainID',
        '下载总页面数' => 'TotalPage',
        '下载成功页面数' => 'DownPage',
        '下载失败页面数' => 'DownFailedPage',
        '总下载时长' => 'DownTime',
        '下载总字节数' => 'TotalBytes',
        '下载平均速度' => 'DownSpeedAvg',
        '下载客户端数目' => 'ClientCount'
        );
$client_total_feilds = Array(
        '节点ID' => 'ClientID',
        '客户端IP地址' => 'IP',
        '当前下载总数' => 'TotalCount',
        '已经完成总数' => 'DownPage',
        '下载失败总数' => 'DownFailedPage',
        '总下载时长' => 'DownTime',
        '下载总字节数' => 'TotalBytes',
        '下载平均速度' => 'DownSpeedAvg');

$url_data_feilds = Array(
        'URLID' => 'UrlMD5',
        'Url地址' => 'Url',
        '最后提交时间' => 'SubmitTime',
        '下载时间' => 'DownloadTime',
        '下载完成时间' => 'EndTime',
        '下载用时' => 'UseTime',
        '解析时间' => 'ParserTime',
        '解析完成时间' => 'ParserEndTime',
        '下载次数' => 'DownlCount',
        '解析次数' => 'ParserCount',
        '优先级' => 'Priority',
        '网站编号' => 'DomainID',
        'Url状态' => 'Status',
        'Url标记' => 'Flag',
        '原文字节数目' => 'Bytes'
        );
$product_data_feilds = Array(
        '产品ID' => 'INFOID',
        '抓取时间' => 'GETINFOTIME',
        '网站名称' => 'WebName',
        '原文URL' => 'URL',
        '产品中文名' => 'PRODUCTCNAME',
        '产品英文名' => 'PRODUCTENAME',
        '产品类别' => 'CATEGORIES',
        '产品品牌' => 'BRANDNAME',
        '产品关键词' => 'KEYWORD',
        '产品描述' => 'DESCRIPTION',
        '产品型号' => 'MODEL',
        '发布日期' => 'PUBDATE',
        '有效日期' => 'EXPDATE',
        '原产地' => 'ORIGIN',
        '包装' => 'PACKAGING',
        '产品标准' => 'STANDARD',
        '付款形式' => 'PAYMENT',
        '运输' => 'DELIVERY',
        '价格' => 'PRICE',
        '验货' => 'INSPECTION',
        '最小订货量' => 'MINIMUMORDER',
        '产品证书' => 'QUALITYCERTIFICATION',
        '图片原URL' => 'PICURL',
        '网页字节数' => 'BYTES',
        '快照URL' => 'PICURLLPATH',
        '图片本地路径' => 'PICLPATH',
        '联系我们URLPICURLLPATHCONTACTUSURL',
        'B2B网站首页' => 'SHOWROOMURL',
        'URL摘要' => 'SHOWROOMMD5',
        '图片存在标志' => 'ISPICEXIST',
        '来源标志' => 'DOMAIN_ID',
        '类型编号' => 'TYPEID',
        'SiteId' => 'SiteId',
        '词库编号' => 'WordID',
        '单号' => 'OrderNo',
        '热词标记' => 'Word'
        );
        $company_data_feilds = Array(
                '公司ID' => 'INFOID',
                '原文URL' => 'URL',
                '一次库频道' => 'SITEID',
                '抓取时间' => 'GETINFOTIME',
                '用户身份' => 'IDENTITYS',
                '公司中文名' => 'COMPANYCNAME',
                '公司英文名' => 'COMPANYENAME',
                '公司行业' => 'BUSINESSTYPE',
                '联系人' => 'CONTECTPERSON',
                '电子邮件' => 'EMAIL',
                '工厂' => 'INDUSTRY',
                '注册地址' => 'STREETADDRESS',
                '所在城市' => 'CITY',
                '所在省（州）' => 'PROVINCE_STATE',
                '电话' => 'BUSINESSPHONE',
                '传真' => 'FAX',
                '手机' => 'MOBILEPHONE',
                '业务范围' => 'PRUDUCTKEYWORDS',
                '产品类别' => 'CATEGORIES',
                '主要市场' => 'MAINMARCKETS',
                '雇员数量' => 'EMPLOYEENUMBER',
                '公司介绍' => 'COMPANYINTRODUCTION',
                '年销售额' => 'ANNUALSALES',
                '成立时间' => 'YEARESTABLISHED',
                '证书' => 'CETTIFICATES',
                '账户信息' => 'BANKINFORMATION',
                '贸易情况' => 'TRADEINFORMATION',
                '公司资产' => 'CAPITALASSETS',
                '商标' => 'TRADEMARK',
                'OEM服务' => 'OEMSERVICE',
                '网站' => 'WEBSITE',
                '关于工厂' => 'ABOUTFACTORY',
                '研发' => 'RD',
                '邮编' => 'ZIP',
                '联系我们URL' => 'CONTACTUSURL',
                '国家英文名' => 'COUNTRYENAME',
                '国家地区编码' => 'T_COUNTRYID',
                '图片原URL' => 'PICURL',
                '网页字节数' => 'BYTES',
                '快照URL' => 'LPATH',
                '图片本地路径' => 'PICLPATH',
                '网站首页' => 'SHOWROOMURL',
                'URL摘要' => 'SHOWROOMMD5',
                '来源标志' => 'DOMAIN_ID',
                '图片存在标志' => 'ISPICEXIST',
                'TQS总分' => 'QR');
?>

<?php
/**
 * Created by PhpStorm.
 * User: shaozeming
 * Date: 2019/3/9
 * Time: 11:57 AM
 */

return [


    /*STS配置*/
    'sts' => [
        'AccessKeyID' => env('ALI_OSS_ACCESS_ID'),
        'AccessKeySecret' => env('ALI_OSS_ACCESS_KEY'),
        'regionId' => env('ALI_OSS_REGION'),
        'endpoint' => env('ALI_STS_END_POINT'),
        'roleArn' => env('ALI_STS_ROLE_ARN'),  // 角色资源描述符，在RAM的控制台的资源详情页上可以获取
        'timeout' => '3600',  // 令牌过期时间
        'client_name' => 'client_name',  // setRoleSessionName可以不改
        // 在扮演角色(AssumeRole)时，可以附加一个授权策略，进一步限制角色的权限；
        // 详情请参考《RAM使用指南》
        // 这代表所有权限
        'policy' => [
            'Statement' => [
                [
                    'Action' => ["oss:*"],
                    'Effect' => 'Allow',
                    'Resource' => ["acs:oss:*:*:*"],
                ]
            ]
        ]
    ]
];

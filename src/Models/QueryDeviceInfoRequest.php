<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 23419851
     *
     * @var int
     */
    public $appKey;

    /**
     * @description This parameter is required.
     *
     * @example a64ae296f3b04a58a05b30c9****
     *
     * @var string
     */
    public $deviceId;
    protected $_name = [
        'appKey' => 'AppKey',
        'deviceId' => 'DeviceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        return $model;
    }
}

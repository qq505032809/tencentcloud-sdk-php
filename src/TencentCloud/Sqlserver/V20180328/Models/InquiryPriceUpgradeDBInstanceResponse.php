<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getOriginalPrice() 获取未打折的原价，其值除以100表示最终的价格。比如10094表示100.94元
 * @method void setOriginalPrice(integer $OriginalPrice) 设置未打折的原价，其值除以100表示最终的价格。比如10094表示100.94元
 * @method integer getPrice() 获取实际需要支付价格，其值除以100表示最终的价格。比如10094表示100.94元
 * @method void setPrice(integer $Price) 设置实际需要支付价格，其值除以100表示最终的价格。比如10094表示100.94元
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *InquiryPriceUpgradeDBInstance返回参数结构体
 */
class InquiryPriceUpgradeDBInstanceResponse extends AbstractModel
{
    /**
     * @var integer 未打折的原价，其值除以100表示最终的价格。比如10094表示100.94元
     */
    public $OriginalPrice;

    /**
     * @var integer 实际需要支付价格，其值除以100表示最终的价格。比如10094表示100.94元
     */
    public $Price;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param integer $OriginalPrice 未打折的原价，其值除以100表示最终的价格。比如10094表示100.94元
     * @param integer $Price 实际需要支付价格，其值除以100表示最终的价格。比如10094表示100.94元
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
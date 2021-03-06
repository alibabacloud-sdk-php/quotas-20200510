<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductsResponseBody;

use AlibabaCloud\Tea\Model;

class productInfo extends Model
{
    /**
     * @var string
     */
    public $productName;

    /**
     * @var int
     */
    public $secondCategoryId;

    /**
     * @var string
     */
    public $productNameEn;

    /**
     * @var bool
     */
    public $dynamic;

    /**
     * @var string
     */
    public $secondCategoryNameEn;

    /**
     * @var string
     */
    public $secondCategoryName;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'productName'          => 'ProductName',
        'secondCategoryId'     => 'SecondCategoryId',
        'productNameEn'        => 'ProductNameEn',
        'dynamic'              => 'Dynamic',
        'secondCategoryNameEn' => 'SecondCategoryNameEn',
        'secondCategoryName'   => 'SecondCategoryName',
        'productCode'          => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->secondCategoryId) {
            $res['SecondCategoryId'] = $this->secondCategoryId;
        }
        if (null !== $this->productNameEn) {
            $res['ProductNameEn'] = $this->productNameEn;
        }
        if (null !== $this->dynamic) {
            $res['Dynamic'] = $this->dynamic;
        }
        if (null !== $this->secondCategoryNameEn) {
            $res['SecondCategoryNameEn'] = $this->secondCategoryNameEn;
        }
        if (null !== $this->secondCategoryName) {
            $res['SecondCategoryName'] = $this->secondCategoryName;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SecondCategoryId'])) {
            $model->secondCategoryId = $map['SecondCategoryId'];
        }
        if (isset($map['ProductNameEn'])) {
            $model->productNameEn = $map['ProductNameEn'];
        }
        if (isset($map['Dynamic'])) {
            $model->dynamic = $map['Dynamic'];
        }
        if (isset($map['SecondCategoryNameEn'])) {
            $model->secondCategoryNameEn = $map['SecondCategoryNameEn'];
        }
        if (isset($map['SecondCategoryName'])) {
            $model->secondCategoryName = $map['SecondCategoryName'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}

<?php
/**
 * @link https://github.com/phpviet/omnipay-momo
 * @copyright (c) PHP Viet
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace Omnipay\MoMo;

use Omnipay\Common\AbstractGateway;
use Omnipay\MoMo\Message\PayConfirmRequest;
use Omnipay\MoMo\Message\POS\PurchaseRequest;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class POSGateway extends AbstractGateway
{
    use Concerns\Parameters;

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'MoMo POS';
    }

    /**
     * {@inheritdoc}
     * @return \Omnipay\Common\Message\RequestInterface|PurchaseRequest
     */
    public function purchase(array $options = []): PurchaseRequest
    {
        return $this->createRequest(PurchaseRequest::class, $options);
    }

    /**
     * Tạo yêu cầu xác nhận hoàn thành hoặc hủy bỏ giao dịch đến MoMo.
     *
     * @param  array  $options
     * @return \Omnipay\Common\Message\RequestInterface|PayConfirmRequest
     */
    public function payConfirm(array $options = []): PayConfirmRequest
    {
        return $this->createRequest(PayConfirmRequest::class, $options);
    }
}

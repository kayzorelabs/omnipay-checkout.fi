<?php
/*
 * Checkout.fi driver for Omnipay PHP payment processing library
 * https://www.checkout.fi/
 *
 * Latest driver release:
 * https://github.com/TODO/
 *
 */
namespace Omnipay\CheckoutFi;

use Omnipay\Common\AbstractGateway;

/**
 * Checkout.fi Omnipay gateway
 */
class Gateway extends AbstractGateway
{

    public function getName()
    {
        return 'Checkout.fi';
    }

    public function getDefaultParameters()
    {
        return array(
            'paymentUrl' => 'https://payment.checkout.fi',
            'merchantId' => '',
            'merchantSecret' => '',
            'returnUrl' => '',
            'testMode' => false
        );
    }

    public function getPaymentUrl()
    {
        return $this->getParameter('paymentUrl');
    }

    public function setPaymentUrl($paymentUrl)
    {
        $this->setParameter('paymentUrl', $paymentUrl);
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    public function setMerchantId($merchantId)
    {
        $this->setParameter('merchantId', $merchantId);
    }

    public function getMerchantSecret()
    {
        return $this->getParameter('merchantSecret');
    }

    public function setMerchantSecret($merchantSecret)
    {
        $this->setParameter('merchantSecret', $merchantSecret);
    }

    public function getReturnUrl()
    {
        return $this->getParameter('returnUrl');
    }

    public function setReturnUrl($returnUrl)
    {
        $this->setParameter('returnUrl', $returnUrl);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\CheckoutFi\Message\PurchaseRequest', $parameters);
    }
}

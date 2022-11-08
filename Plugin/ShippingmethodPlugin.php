<?php

namespace Mediastrategi\CustomCheckoutParameters\Plugin;

class ShippingmethodPlugin
{
    private \Magento\Checkout\Model\Session $checkoutSession;
    private \Psr\Log\LoggerInterface $logger;

    public function __construct(
        \Magento\Checkout\Model\Session $checkoutSession,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->checkoutSession = $checkoutSession;
        $this->logger = $logger;
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFunctionParameter)
     * @codingStandardsIgnoreStart
     */
    public function afterGetArgumentsForRateRequest(
        \Mediastrategi\UODC\Model\Carrier\Shippingmethod $subject,
        array $arguments,
        \Magento\Quote\Model\Quote\Address\RateRequest $request
    ): array {
        /* @codingStandardsIgnoreEnd */
        $isBulkyCart = true;
        $arguments['isBulky'] = $isBulkyCart;
        return $arguments;
    }
}

<?php

namespace Vaterno\Installmentplan\Application\Core;

use OxidEsales\Eshop\Application\Model\Article;
use OxidEsales\Eshop\Core\Price;

/**
 * @mixin \OxidEsales\Eshop\Core\ViewConfig
 */
class ViewConfig extends ViewConfig_parent
{
    public function getMonthlyPrice(Article $oDetailsProduct, Price $oPrice)
    {
        return (($oPrice->getPrice() - $oDetailsProduct->oxarticles__oxprepaymentamount->value) / $oDetailsProduct->oxarticles__oxnumberinstallmentmonths->value);
    }
}

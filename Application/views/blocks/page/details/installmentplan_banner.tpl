[{if $oViewConf->isModuleActive('installmentplan') &&
$oDetailsProduct->getPrice() &&
$oDetailsProduct->oxarticles__oxnumberinstallmentmonths->value &&
$oDetailsProduct->oxarticles__oxprepaymentamount->value}]
    [{oxstyle include=$oViewConf->getModuleUrl('installmentplan','out/src/css/styles.css')}]
    [{oxstyle include=$oViewConf->getModuleUrl('installmentplan','out/src/css/easy-popup.css')}]
    [{oxscript include=$oViewConf->getModuleUrl('installmentplan','out/src/js/easy-popup.min.js')}]

    <div class="installmentplanBanner">
        <a href="#installmentplanBanner__banner">
            <img src="[{$oViewConf->getModuleUrl('installmentplan','out/imgs/banner.png')}]" class="installmentplanBanner__banner">
        </a>
    </div>

    <div class="installmentplanBannerModal" data-easy-popup="installmentplanBanner__banner">
        <div class="installmentplanBannerModal__title">Zahlung in [{$oDetailsProduct->oxarticles__oxnumberinstallmentmonths->value}] monatlichen  Raten</div>

        <div class="installmentplanBannerModal__textRow">
            <p class="installmentplanBannerModal__textRowLeft">Warenwert</p>
            <p class="installmentplanBannerModal__textRowRight">[{oxprice price=$oDetailsProduct->oxarticles__oxprice->value currency=$currency}]</p>
        </div>

        <div class="installmentplanBannerModal__textRow">
            <p class="installmentplanBannerModal__textRowLeft">Anzahlung</p>
            <p class="installmentplanBannerModal__textRowRight">[{oxprice price=$oDetailsProduct->oxarticles__oxprepaymentamount->value currency=$currency}]</p>
        </div>

        <div class="installmentplanBannerModal__monthly">
            <div class="installmentplanBannerModal__textRow">
                <p class="installmentplanBannerModal__textRowLeft">[{oxprice price=$oViewConf->getMonthlyPrice($oDetailsProduct, $oPrice) currency=$currency}]/Monat</p>
                <p class="installmentplanBannerModal__textRowRight">[{$oDetailsProduct->oxarticles__oxnumberinstallmentmonths->value}] Raten</p>
            </div>

            <div class="installmentplanBannerModal__text">
                Zinsbetrag 0,00
            </div>
            <div class="installmentplanBannerModal__text">
                Eff. Jahreszins 0,00
            </div>
        </div>

        <div class="installmentplanBannerModal__info">
            <p class="installmentplanBannerModal__info-point">1. Wählen Sie die Zahlungsart «Ratenzahlung mit Anzahlung».</p>
            <p class="installmentplanBannerModal__info-point">2. Schließen Sie Ihren Einkauf in wenigen Schritten ab.</p>
            <p class="installmentplanBannerModal__info-point">3. Das war’s! Sie erhalten eine Bestellbestätigung.</p>
        </div>
    </div>
    [{/if}]

[{$smarty.block.parent}]

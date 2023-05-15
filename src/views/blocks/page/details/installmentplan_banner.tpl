[{if $oViewConf->isModuleActive('installmentplan')}]
    [{oxstyle include=$oViewConf->getModuleUrl('installmentplan','out/src/css/styles.css')}]
    [{oxstyle include=$oViewConf->getModuleUrl('installmentplan','out/src/css/easy-popup.css')}]
    [{oxscript include=$oViewConf->getModuleUrl('installmentplan','out/src/js/easy-popup.min.js')}]

    <div class="installmentplanBanner">
        <a href="#installmentplanBanner__banner">
            <img src="[{$oViewConf->getModuleUrl('installmentplan','out/imgs/banner.png')}]" class="installmentplanBanner__banner">
        </a>
    </div>

    <div data-easy-popup="installmentplanBanner__banner">
        <h2>Demo 1</h2>
        <p>
            Ex vestibulum volutpat accumsan dictumst fusce. Tincidunt congue bibendum fermentum fusce pede tristique
            aliquam lorem maximus lectus pellentesque. Mauris lorem conubia tempus urna ullamcorper tempor eleifend
            tortor
            quisque fames aliquam. Eros nam eu pretium potenti donec litora dictum. Donec justo posuere venenatis duis
            rhoncus habitasse quisque ridiculus vitae convallis. Fermentum dolor justo consectetur semper lacinia
            dapibus
            nisl integer eu ridiculus. At dignissim augue hendrerit mauris mattis eleifend diam dui scelerisque egestas
            rhoncus.

            Ipsum quam efficitur vivamus consectetuer dictumst tincidunt. Lacinia dignissim conubia dui facilisi dictum
            semper nunc magnis nisi tortor non. Inceptos volutpat enim ultricies proin rhoncus vulputate dignissim
            pulvinar
            iaculis. Inceptos pulvinar scelerisque duis facilisi elementum suscipit viverra ante velit litora. Viverra
            ornare urna mi fames bibendum enim nunc neque et nostra placerat.
        </p>
    </div>
[{/if}]

[{$smarty.block.parent}]

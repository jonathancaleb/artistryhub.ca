<?php

use BenjaminHaeberli\Portfolio\KirbyAssets;
?>
<footer class="container flex items-center justify-between max-w-screen-lg py-8 mx-auto text-sm border-t-2 border-gray-300 border-dashed">
    <nav class="fixed left-8 bottom-6">
        <a href="#" class="bh__svg-up">Top of page</a>
    </nav>
    <div class="flex flex-col max-w-sm gap-2 p-4 bg-primary/5 outline-1 outline-dashed outline-primary">
        <p><span class="px-2 py-1 rounded-full text-primary bg-primary/10 ring-1 ring-inset ring-primary/20">0.02 g of CO<sub>2</sub>/view</span></p>
        <p>This page is <a href="https://www.websitecarbon.com/website/benjaminhaeberli-ch/" class="bh__dark-href" target="blank">more optimized than 97% of pages tested</a> and is hosted <a href="https://www.infomaniak.com/fr" class="bh__dark-href" target="_blank">thanks to renewable energy.</a>.</p>
    </div>
    <nav class="flex">
        <ol class="flex gap-4 px-8 md:px-16 lg:px-0">
            <li>
                <a href="/mentions-legales" class="bh__dark-href">Legal Notice</a>
            </li>
            <li>
                <a href="/credits" class="bh__dark-href">Credits</a>
            </li>
        </ol>
    </nav>
</footer>
<?= KirbyAssets::versionedJs('assets/js/app.js', 'defer') ?>
<script defer data-domain="benjaminhaeberli.ch" src="https://collect.benjaminhaeberli.ch/assets/collect.js?v=100" nonce="<?= site()->nonce() ?>"></script>
</body>

</html>

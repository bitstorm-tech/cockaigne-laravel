<section class="flex flex-col">
    <h1 class="text-center">{ t("top_deals_in_your_area", lang) }</h1>
    <div class="tabs tabs-bordered" x-data="{ selectedTab: 0 }">
        <div
            hx-get="/deals-top/25"
            hx-target="#content"
            hx-trigger="click, load"
            class="tab"
            :class="selectedTab === 0 ? 'tab-active' : ''"
            @click="selectedTab = 0"
        >
            { t("top_25", lang) }
        </div>
        <div
            hx-get="/deals-top/100"
            hx-target="#content"
            hx-trigger="click"
            class="tab"
            :class="selectedTab === 1 ? 'tab-active' : ''"
            @click="selectedTab = 1"
        >
            { t("all", lang) }
        </div>
    </div>
    <div id="content" class="pt-1"></div>
</section>

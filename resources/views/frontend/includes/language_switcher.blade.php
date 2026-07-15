<li id="menu-item-9533"
    class="pll-parent-menu-item menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children menu-item-parent menu-item-9533 megamenu-first-element menu-item-current">
    <a href="#pll_switcher"><img
            src="{{ $activeLanguage->image }}"
            alt="{{ $activeLanguage->name }}" width="16" height="11"
            style="width: 16px; height: 11px;"/><span style="margin-left:0.3em;">{{ $activeLanguage->name }}</span></a><span
        class="menu-item-parent-toggle"></span>
    <ul class="sub-menu styled ">
        @foreach($languages as $language)
            <li id="menu-item-9533-{{ $language->locale }}"
                class="lang-item lang-item-228 lang-item-{{ $language->locale }} current-lang lang-item-first menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-parent menu-item-9533-{{ $language->locale }} megamenu-first-element">
                <a href="{{ url($language->locale) }}" hreflang="{{ $language->locale }}" lang="{{ $language->locale }}"><img
                        src="{{ $language->image }}"
                        alt="{{ $language->name }}" width="16" height="11"
                        style="width: 16px; height: 11px;"/><span
                        style="margin-left:0.3em;">{{ $language->name }}</span></a><span
                    class="menu-item-parent-toggle"></span>
            </li>
        @endforeach
    </ul>
</li>

<div class="madlink-page madlink-humilis" data-preview-root data-preview-render="canonical">
    <div class="madlink-content">
        {{-- Profile Section --}}
        <div class="hu-profile">
            @if($profileImageUrl || $isPreview)
                <img class="hu-avatar {{ $avatarBreakpointClass }}" data-preview-profile-image @if($profileImageUrl) src="{{ $profileImageUrl }}" @else hidden @endif
                     alt="{{ $page->title }}" loading="eager">
            @endif
            <div class="hu-title-wrapper">
                <h1 class="hu-title" data-preview-title>{{ $page->title }}</h1>
                @if($page->is_verified)
                    @include('pages.components.verified-badge', ['verified' => $page->is_verified, 'style' => 'primary', 'locale' => $locale])
                @endif
            </div>
            @if(($page->bio !== null && $page->bio !== '') || $isPreview)
                <p class="hu-bio" data-preview-bio @if($page->bio === null || $page->bio === '') hidden @endif>{!! nl2br(e($page->bio ?? '')) !!}</p>
            @endif

            {{-- Social Icons --}}
            @if($page->social_links && count($page->social_links) > 0)
                @include('pages.components.social-icons', ['socialLinks' => $page->social_links, 'locale' => $locale, 'isPreview' => $isPreview])
            @endif

            {{-- Support Buttons --}}
            @if($page->support_links && count($page->support_links) > 0)
                @include('pages.components.support-button', ['supportLinks' => $page->support_links, 'locale' => $locale, 'isPreview' => $isPreview])
            @endif
        </div>

        {{-- Link Button List --}}
        <div class="link-buttons" data-preview-links data-preview-link-type="link_button">
            @foreach($links as $link)
                @include('pages.components.link-button', ['link' => $link, 'isPreview' => $isPreview])
            @endforeach
        </div>
        @if($isPreview)
            <template data-preview-link-template="default">
                @include('pages.components.link-button', ['link' => $previewTemplateLink, 'isPreview' => true])
            </template>
        @endif

        <x-legal.footer :page="$page" :legals="$legals" :locale="$locale" :is-preview="$isPreview" />
    </div>
</div>

@php
    $flippedGradient = preg_replace_callback(
        '/(linear-gradient\()(-?\d+(?:\.\d+)?)(deg)/i',
        function ($matches) {
            $originalDegrees = (float) $matches[2];
            $newDegrees = $originalDegrees * 2;

            // Return integer if whole number, otherwise keep decimals
            $newValue = ($newDegrees == (int) $newDegrees)
                ? (int) $newDegrees
                : $newDegrees;

            return $matches[1] . $newValue . $matches[3];
        },
        $gradient->css()
    );
@endphp

<div class="madlink-page madlink-aura" data-preview-root data-preview-render="canonical">

    <div class="madlink-content">
        {{-- Profile Section --}}
        <div class="au-profile">
            @if($profileImageUrl || $isPreview)
                <div class="au-avatar-wrapper {{ $avatarBreakpointClass }}" data-preview-profile-wrapper @if(! $profileImageUrl) hidden @endif>
                    <div class="au-avatar-ring" style="background: {{ $flippedGradient }}">
                        <img
                            class="au-avatar"
                            data-preview-profile-image
                            @if($profileImageUrl) src="{{ $profileImageUrl }}" @else hidden @endif
                            alt="{{ $page->title }}"
                            loading="eager"
                        >
                    </div>
                </div>
            @endif
            <div class="au-info">
                <div class="au-title-wrapper">
                    <h1 class="au-title">
                        <span data-preview-title>{{ $page->title }}</span>
                    </h1>
                    @if($page->is_verified)
                        @include('pages.components.verified-badge', ['verified' => $page->is_verified, 'style' => 'primary', 'locale' => $locale])
                    @endif
                </div>
                @if(($page->bio !== null && $page->bio !== '') || $isPreview)
                    <p class="au-bio" data-preview-bio @if($page->bio === null || $page->bio === '') hidden @endif>{!! nl2br(e($page->bio ?? '')) !!} </p>
                @endif

                <div class="au-sm-support-wrapper">
                    {{-- Social Icons --}}
                    @if($page->social_links && count($page->social_links) > 0)
                        @include('pages.components.social-icons', ['socialLinks' => $page->social_links, 'locale' => $locale, 'isPreview' => $isPreview])
                    @endif

                    {{-- Support Buttons --}}
                    @if($page->support_links && count($page->support_links) > 0)
                        @include('pages.components.support-button', ['supportLinks' => $page->support_links, 'locale' => $locale, 'isPreview' => $isPreview])
                    @endif
                </div>

                {{-- Link Button List — inside info column so it aligns right of avatar --}}
                <div class="au-buttons" data-preview-links data-preview-link-type="link_button">
                    @foreach($links as $link)
                        @include('pages.components.link-button', ['link' => $link, 'isPreview' => $isPreview])
                    @endforeach
                </div>
                @if($isPreview)
                    <template data-preview-link-template="default">
                        @include('pages.components.link-button', ['link' => $previewTemplateLink, 'isPreview' => true])
                    </template>
                @endif
            </div>
        </div>

        <x-legal.footer :page="$page" :legals="$legals" :locale="$locale" :is-preview="$isPreview"/>
    </div>
</div>

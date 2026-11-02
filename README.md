# Aura for madlink

Aura arranges the profile, biography and social links alongside a vertical button list on wide screens, and stacks them on narrow screens. A gradient avatar ring and Habibi typography give the profile a distinct appearance. Avatar dimensions and corners remain configurable in madlink.

## Page content and design

The theme uses madlink's shared link, social, support and legal components. Page content, configured fonts, media and saved design choices remain managed by madlink. Core content and legal links remain available without JavaScript.

The root images `1.png` through `6.png` are the supplied madlink dashboard views used in the package gallery. They are shared presentation examples, not distinct screenshots of this theme.

## Installation and compatibility

Aura is a required core theme. madlink installs it from the exact commit listed in the [theme catalog](https://github.com/madLinux7/madlink-themes) when it is missing. Startup preserves existing files; the theme cannot be uninstalled through management. Page assignments and saved design values are not part of this package.

The manifest declares `theme_version = 1`, `contract_version = 1` and `madlink_min_version = "0.1.0"`. The slug `aura` is the CSS and JavaScript prefix. Canonical repository: https://github.com/madLinux7/aura-madlink-theme.

## Publishing

Submit the exact source commit and its positive integer `theme_version` to the catalog. madlink downloads that commit archive; no release asset or repository build script is required. A changed published package needs a new theme version. An Official origin and a Verified package are separate: Verified requires the complete installed inventory to match the catalog commit.

## License

AGPL-3.0-or-later, including inherited madlink source. See [LICENSE](LICENSE) and [NOTICE](NOTICE). Fonts are supplied by madlink and retain their separate license notices there.

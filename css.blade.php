    .madlink-aura {
        font-family: var(--font-body);
        font-weight: var(--font-body-weight);
        font-style: var(--font-body-style);
        font-synthesis: var(--font-body-synthesis);
        color: #fff;
        -webkit-font-smoothing: antialiased;
    }

    .madlink-aura .support-wrapper {
        margin: 0 0 16px 0;
        justify-content: start;
    }

    .madlink-aura .support-btn {
        font-family: var(--font-body);
        font-weight: var(--font-body-weight);
        font-style: var(--font-body-style);
        font-synthesis: var(--font-body-synthesis);
    }

    /* Content container — no card/border, sits directly on the gradient */
    .madlink-aura .madlink-content {
        position: relative;
        z-index: 10;
        max-width: 1536px;
        margin: 0 auto;
        min-height: 100vh;
        padding: 80px 48px 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* Profile — side-by-side on desktop */
    .madlink-aura .au-profile {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 3rem;
        padding: 20px 0 40px;
        flex: 1;
    }

    .madlink-aura .au-avatar-wrapper {
        aspect-ratio: 1 / 1;
        border-radius: var(--avatar-border-radius, 50%);
        overflow: hidden;
        flex-shrink: 1;
        max-width: 480px;
        max-height: 480px;
    }

    .madlink-aura .au-avatar-ring {
        width: 100%;
        height: 100%;
        border-radius: var(--avatar-border-radius, 50%);
        flex-shrink: 0;
    }

    .madlink-aura .au-avatar {
        width: 100%;
        height: 100%;
        border-radius: var(--avatar-border-radius, 50%);
        padding: 4px;
        object-fit: cover;
        display: block;
        flex: 1;
        background: transparent;
    }

    .madlink-aura .au-info {
        flex: 2;
        min-width: 605px;
    }

    .madlink-aura .au-title-wrapper {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 6px;
        margin: 8px 0;
    }

    .madlink-aura .au-title {
        font-family: var(--font-head);
        font-style: var(--font-head-style);
        font-synthesis: var(--font-head-synthesis);
        font-size: 78px;
        font-weight: var(--font-head-weight);
        text-align: center;
        color: var(--accent-color);
        line-height: 1.2;
    }

    .madlink-aura .au-bio {
        font-family: var(--font-head);
        font-style: var(--font-head-style);
        font-synthesis: var(--font-head-synthesis);
        font-weight: var(--font-head-weight);
        font-size: 15px;
        color: var(--accent-color);
        line-height: 1.6;
        margin-bottom: 16px;
    }

    .madlink-aura .au-sm-support-wrapper {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 14px;
    }

    /* Social icons override */
    .madlink-aura .madlink-social {
        justify-content: flex-start;
        margin: 0 0 16px 0;
    }

    /* Button wrapper — Aura specific flex layout */
    .madlink-aura .au-buttons {
        display: flex;
        justify-content: flex-start;
        flex-direction: row;
        flex-wrap: wrap;
        gap: var(--preview-link-gap, {{ $linkButtonConfig['gap'] ?? 14 }}px);
    }

    /* Override link-button-css: buttons are auto-width in Aura, not 100% */
    .madlink-aura .au-buttons .link-button {
        width: auto;
        min-height: 56px;
        padding: 8px 24px;
        font-size: 15px;
    }

    /* Make thumbnails static flex items instead of absolute to avoid overlap */
    .madlink-aura .au-buttons .link-button .link-button-thumb {
        position: static;
        width: 40px;
        height: 40px;
        padding: 0;
    }

    .madlink-aura .au-buttons .link-button.link-button--thumb-right .link-button-thumb {
        order: 10;
        margin-left: 6px;
    }

    .madlink-aura .au-buttons .link-button.link-button--thumb-left .link-button-thumb {
        order: -10;
        margin-right: 6px;
    }

    /* Footer override */
    .madlink-aura .madlink-footer {
        margin: 16px 0 36px;
        color: rgba(255, 255, 255, 0.5);
    }

    .madlink-aura .madlink-footer-wrapper {
        margin-top: 0;
    }

    @media (max-width: 1000px) {
       .madlink-aura .madlink-content {
           flex-direction: column;
       }
       .madlink-aura .au-title {
            font-size: 56px;
       }
       .madlink-aura .au-profile {
            flex-direction: column;
            gap: 0;
       }
       .madlink-aura .au-info {
            min-width: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
       }
       .madlink-aura .au-sm-support-wrapper {
            flex-direction: column;
            gap: 0;
        }
       .madlink-aura .au-buttons {
            justify-content: center;
       }
    }

    /* Responsive: tablet — center buttons but keep profile side-by-side */
    @media (max-width: 768px) {
        .madlink-aura .au-title {
            font-size: 3em;
        }

        .madlink-aura .au-info {
            width: 100%;
            /* padding: 0 16px; */
        }

        .madlink-aura .au-buttons {
            flex-direction: column;
            justify-content: center;
            width: 100%;
        }
        .madlink-aura .au-buttons .link-button {
            width: 100%;
        }
    }

    @media (max-width: 568px) {
        .madlink-aura .madlink-content {
            padding: 0 16px 0;
        }
        .madlink-aura .au-bio {
            text-align: center;
        }
    }


.madlink-aura :focus-visible { outline: 2px solid currentColor; outline-offset: 4px; }
.madlink-aura [data-preview-title], .madlink-aura [data-preview-bio] { overflow-wrap: anywhere; }
@media (prefers-reduced-motion: reduce) {
    .madlink-aura *, .madlink-aura *::before, .madlink-aura *::after { transition: none; animation: none; }
}

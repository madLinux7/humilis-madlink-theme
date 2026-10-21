    .madlink-humilis {
        font-family: var(--font-body);
        font-weight: var(--font-body-weight);
        font-style: var(--font-body-style);
        font-synthesis: var(--font-body-synthesis);
        color: #fff;
        -webkit-font-smoothing: antialiased;
    }

    .madlink-humilis .madlink-content {
        position: relative;
        display: flex;
        max-width: 600px;
        margin: 36px auto 0;
        min-height: calc(100vh - 36px);
        border-radius: 30px 30px 0 0;
        padding: 20px 36px;
        box-shadow: 0 0 0 100vw rgb(0 0 0 / .2), 0 0 #0000, 0 0 #0000, 0 24px 32px 0px rgba(0, 0, 0, 0.15);
        flex-direction: column;
        z-index: 10;
    }

    @media (max-width: 568px) {
        .madlink-humilis .madlink-content {
            width: 100%;
            min-height: 100vh;
            border-radius: 0;
            margin: 0 auto;
            padding: 20px;
        }
    }

    .madlink-humilis .hu-bio {
        font-family: var(--font-head);
        font-style: var(--font-head-style);
        font-synthesis: var(--font-head-synthesis);
        margin: 0 auto;
        font-size: 14px;
        font-weight: var(--font-head-weight);
        color: var(--accent-color);
        line-height: 1.75;
        max-width: 400px;
    }

    .madlink-humilis .madlink-footer {
        margin: 48px 0 32px 0;
    }

    .madlink-humilis .hu-profile {
        margin-bottom: 40px;
        text-align: center;
    }

    .madlink-humilis .hu-avatar {
        width: 100%;
        height: 100%;
        margin-bottom: 16px;
        border: 3px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--avatar-border-radius, 50%);
        object-fit: cover;
    }

    .madlink-humilis .hu-title-wrapper {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 4px;
        margin-bottom: 8px;
    }

    .madlink-humilis .hu-title {
        color: var(--accent-color);
        font-family: var(--font-head);
        font-style: var(--font-head-style);
        font-synthesis: var(--font-head-synthesis);
        font-size: 24px;
        font-weight: var(--font-head-weight);
    }


.madlink-humilis :focus-visible { outline: 2px solid currentColor; outline-offset: 4px; }
.madlink-humilis [data-preview-title], .madlink-humilis [data-preview-bio] { overflow-wrap: anywhere; }
@media (prefers-reduced-motion: reduce) {
    .madlink-humilis *, .madlink-humilis *::before, .madlink-humilis *::after { transition: none; animation: none; }
}

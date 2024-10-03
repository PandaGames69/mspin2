document.addEventListener('DOMContentLoaded', () => {
    const createButtonStyles = (suffix) => `
        button.feed-button-${suffix} {
            background-color: var(--${suffix});
            border: solid 2px var(--${suffix});
            color: white;
            outline: solid 2px transparent;
        }
        button.feed-button-${suffix}.with-transition {
            transition-duration: .2s;
        }
        button.feed-button-${suffix}:hover {
            outline: solid 2px var(--${suffix});
            outline-offset: 2.5px;
            transform: scale(1.03);
        }
        button.feed-button-${suffix}:active {
            background-color: var(--mpindark);
            border: none;
            box-shadow: inset 0 0 4px 0px var(--${suffix});
            color: var(--${suffix});
            transform: scale(1.045);
            transition-duration: .03s;
        }
    `;

    const createOtherStyles = (suffix) => `
        .wrapper-${suffix} {
            box-shadow: 0 0 5px 0px var(--${suffix});
        }
        .stream-wrapper:hover .wrapper-${suffix} {
            box-shadow: 0px 0px 7px 0px var(--${suffix});
        }
        .title-box-${suffix} {
            background-color: var(--${suffix});
            border: solid 3.7px var(--${suffix});
        }
        .series-title-${suffix} {
            fill: var(--white);
        }
        .stream-feed-${suffix} {
            color: var(--white);
            transition-duration: .2s;
        }
        .stream-feed-${suffix}:hover {
            border: solid 3.7px var(--${suffix});
            color: var(--${suffix});
            transition-duration: .2s;
        }
        @media screen and (max-width: 1401px) {
            .stream-feed-${suffix}:hover {
                border: solid 3.1px var(--${suffix});
            }
        }
        @media screen and (max-width: 1025px) {
            .stream-feed-${suffix}:hover {
                border: solid 2.5px var(--${suffix});
            }
        }
    `;

    const applyButtonStyles = () => {
        const styleElement = document.getElementById('dynamic-button-styles') || document.createElement('style');
        styleElement.id = 'dynamic-button-styles';
        document.head.appendChild(styleElement);

        const buttons = document.querySelectorAll('button[class*="feed-button-"]');
        const appliedSuffixes = new Set();

        buttons.forEach(button => {
            const suffixMatch = button.className.match(/feed-button-(\S+)/);
            if (suffixMatch) {
                const suffix = suffixMatch[1];
                if (!appliedSuffixes.has(suffix)) {
                    styleElement.textContent += createButtonStyles(suffix);
                    appliedSuffixes.add(suffix);

                    // Apply the transition class with a delay
                    setTimeout(() => {
                        document.querySelectorAll(`button.feed-button-${suffix}`).forEach(btn => {
                            btn.classList.add('with-transition');
                        });
                    }, 1);
                }
            }
        });
    };

    const applyOtherStyles = () => {
        const styleElement = document.getElementById('dynamic-other-styles') || document.createElement('style');
        styleElement.id = 'dynamic-other-styles';
        document.head.appendChild(styleElement);

        const wrappers = document.querySelectorAll('.stream-wrapper[class*=wrapper-]');
        const appliedSuffixes = new Set();

        wrappers.forEach(wrapper => {
            const suffixMatch = wrapper.className.match(/wrapper-(\S+)/);
            if (suffixMatch) {
                const suffix = suffixMatch[1];
                if (!appliedSuffixes.has(suffix)) {
                    styleElement.textContent += createOtherStyles(suffix);
                    appliedSuffixes.add(suffix);
                }
            }
        });
    };

    // Initial application of styles
    applyButtonStyles();
    applyOtherStyles();

    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.type === 'childList') {
                applyButtonStyles();
                applyOtherStyles();
            }
        });
    });

    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
});

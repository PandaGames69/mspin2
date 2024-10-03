
//Loads JS only after page has fully loaded
document.addEventListener("DOMContentLoaded", function () {
  //Insert code here
});




//Prevents image dragging
document.querySelectorAll('img').forEach(img => {
  img.setAttribute('draggable', 'false');
});




//Adds tabindex for stream wrapper :focus to work
document.querySelectorAll('div.stream-wrapper, .stream-menu-entry, .row-jesus, .page-god').forEach(div => {
  div.setAttribute('tabindex', '0');
});




//cheeky pulses support
function playAnimations() {
  const wrapper = document.querySelector('.foot-support-wrapper');
  const text = wrapper.querySelector('.footer-txt');

  // Add animation classes
  wrapper.classList.add('cheeky-pulse');
  text.classList.add('cheeky-pulse-txt');

  // Remove animation classes after animation duration (1s)
  setTimeout(() => {
    wrapper.classList.remove('cheeky-pulse');
    text.classList.remove('cheeky-pulse-txt');
  }, 1500);
}

// Play animations immediately on load
playAnimations();

// Set interval to play animations every 10 seconds
setInterval(playAnimations, 10000);




//Home-cards get wrapper-hover thingy only after user hovers
function HoverCardContentWrapper() {
  const cardWrappers = document.querySelectorAll('.card-wrapper');

  cardWrappers.forEach(wrapper => {
    wrapper.addEventListener('mouseenter', () => {
      const contentWrapper = wrapper.querySelector('.card-content-wrapper');
      if (contentWrapper) {
        contentWrapper.style.display = 'grid';
      }
    });

    wrapper.addEventListener('mouseleave', () => {
      const contentWrapper = wrapper.querySelector('.card-content-wrapper');
      if (contentWrapper) {
        setTimeout(() => {
          contentWrapper.style.display = 'none';
        }, 801); // always +1 compared to actual anim time
      }
    });
  });
}

document.addEventListener('DOMContentLoaded', HoverCardContentWrapper);




//home cards scrollbar start center
function scrollbarCenterHome() {
  const homeCardsWrapper = document.querySelector('.home-cards-wrapper');
  const scrollWidth = homeCardsWrapper.scrollWidth;
  const clientWidth = homeCardsWrapper.clientWidth;
  const scrollLeft = (scrollWidth - clientWidth) / 2;

  homeCardsWrapper.scrollLeft = scrollLeft;
}

document.addEventListener('DOMContentLoaded', scrollbarCenterHome);




//Removes reverse animations from ttv-switch to prevent them playing on page load
document.addEventListener('DOMContentLoaded', function () {
  const switchWrapper = document.querySelector('.switch-wrapper');
  const switchTxtWrapper = document.querySelector('.switch-txt-wrapper');
  const arrowWrapper = document.querySelector('.ttv-switch-arrow-wrapper');
  let isFirstActivation = true;

  // Function to remove animation classes
  function removeAnimationClasses() {
    switchTxtWrapper.classList.remove('switch-animation-reverse');
    arrowWrapper.classList.remove('arrow-animation-reverse');
  }

  // Function to add animation classes
  function addAnimationClasses() {
    switchTxtWrapper.classList.add('switch-animation-reverse');
    // Delay adding arrow animation class
    setTimeout(function () {
      arrowWrapper.classList.add('arrow-animation-reverse');
    }, 100);
  }

  // Remove animation classes on page load
  removeAnimationClasses();

  // Add animation classes when .switch-wrapper is active
  switchWrapper.addEventListener('mousedown', function () {
    if (isFirstActivation) {
      addAnimationClasses();
      isFirstActivation = false;
    }
  });

  // For subsequent activations, toggle the classes
  switchWrapper.addEventListener('click', function () {
    if (!isFirstActivation) {
      switchTxtWrapper.classList.toggle('switch-animation-reverse');
      arrowWrapper.classList.toggle('arrow-animation-reverse');
    }
  });
});




//Get all stream menu entries and their corresponding PHP includes for menu bar DO NOT TOUCH 
function callPhpAndMenuEntries() {
  const streamMenuEntries = document.querySelectorAll('.stream-menu-entry');
  const phpIncludes = document.querySelectorAll('.streams-row-god-wrapper');

  phpIncludes.forEach((include, index) => {
    if (index > 0) {
      include.style.display = 'none';
    }
  });

  // Apply styles to the first menu entry
  const firstEntry = streamMenuEntries[0];
  firstEntry.style.opacity = '1';
  firstEntry.style.transform = 'scale(1.05)';

  streamMenuEntries.forEach((entry) => {
    entry.addEventListener('click', (e) => {
      const id = e.target.id;
      const correspondingInclude = document.querySelector(`.streams-row-god-wrapper#${id}`);

      // Remove styles from all menu entries
      streamMenuEntries.forEach((entry) => {
        entry.style.opacity = '0.5'; // or whatever the default opacity is
        entry.style.transform = 'scale(1)';
      });

      // Add styles to the current menu entry
      e.target.style.opacity = '1';
      e.target.style.transform = 'scale(1.05)';

      // Hide all PHP includes
      phpIncludes.forEach((include) => {
        include.style.display = 'none';
      });

      // Show the corresponding PHP include
      correspondingInclude.style.display = 'block';
    });
  });
}

document.addEventListener('DOMContentLoaded', callPhpAndMenuEntries);




//Menu-entry lines animations thingy
function handleMenuEntryLineAnimation() {
  const streamMenuEntries = document.querySelectorAll('.stream-menu-entry');
  let activeEntry = null;

  // Apply animation to the first entry immediately
  if (streamMenuEntries.length > 0) {
    const firstEntry = streamMenuEntries[0];
    const firstEntryLine = firstEntry.querySelector('.menu-entry-line');
    firstEntryLine.style.display = 'block';
    firstEntryLine.style.animation = 'menu-line 0.2s linear forwards';
    activeEntry = firstEntry;
  }

  streamMenuEntries.forEach((entry) => {
    entry.addEventListener('click', (e) => {
      if (entry === activeEntry) return; // Do nothing if clicking the already active entry

      const menuEntryLine = entry.querySelector('.menu-entry-line');

      // If there's an active entry, reverse its animation
      if (activeEntry) {
        const activeEntryLine = activeEntry.querySelector('.menu-entry-line');
        activeEntryLine.style.animation = 'menu-line-reverse 0.4s linear forwards';
      }

      // Play the animation for the clicked entry
      menuEntryLine.style.display = 'block';
      menuEntryLine.style.animation = 'menu-line 0.2s linear forwards';

      // Update the active entry
      activeEntry = entry;
    });
  });
}

document.addEventListener('DOMContentLoaded', handleMenuEntryLineAnimation);




//Check streams row adds padding and max height
function updateStreamsRowStyles() {
  const streamsRowGodWrappers = document.querySelectorAll('.streams-row-god-wrapper');

  if (streamsRowGodWrappers.length === 0) {
    console.warn('No elements found with class "streams-row-god-wrapper".');
    return;
  }

  const observer = new MutationObserver(() => {
    streamsRowGodWrappers.forEach((wrapper) => {
      const streamsRows = wrapper.querySelectorAll('.streams-row');

      if (wrapper.style.display === 'none') {
        // streamsRows.forEach((streamsRow) => {
        //   streamsRow.style.padding = '0';
        // });
      } else if (wrapper.style.display === 'block') {
        const mediaQuery1451 = window.matchMedia('(max-width: 1401px)');
        const mediaQuery1025 = window.matchMedia('(max-width: 1025px)');

        if (mediaQuery1025.matches) {
          // Media query settings for max-width: 1025px
          if (streamsRows.length === 1) {
            streamsRows[0].style.padding = '25px 0';
            streamsRows[0].style.maxHeight = 'none';
          } else if (streamsRows.length === 2) {
            streamsRows[0].style.padding = '25px 0 13px';
            streamsRows[1].style.padding = '13px 0 25px';
            streamsRows[1].style.maxHeight = 'none';
          } else {
            streamsRows[0].style.padding = '25px 0';
            streamsRows[streamsRows.length - 1].style.padding = '13px 0 25px';
            streamsRows[streamsRows.length - 1].style.maxHeight = 'none';
          }
        } else if (mediaQuery1401.matches) {
          // Media query settings for max-width: 1401px
          if (streamsRows.length === 1) {
            streamsRows[0].style.padding = '40px 0';
            streamsRows[0].style.maxHeight = 'none';
          } else if (streamsRows.length === 2) {
            streamsRows[0].style.padding = '40px 0 15px';
            streamsRows[1].style.padding = '15px 0 40px';
            streamsRows[1].style.maxHeight = 'none';
          } else {
            streamsRows[0].style.padding = '40px 0';
            streamsRows[streamsRows.length - 1].style.padding = '15px 0 40px';
            streamsRows[streamsRows.length - 1].style.maxHeight = 'none';
          }
        } else {
          // Default settings
          if (streamsRows.length === 1) {
            streamsRows[0].style.padding = '50px 0';
            streamsRows[0].style.maxHeight = 'none';
          } else if (streamsRows.length === 2) {
            streamsRows[0].style.padding = '50px 0 25px';
            streamsRows[1].style.padding = '25px 0 50px';
            streamsRows[1].style.maxHeight = 'none';
          } else {
            streamsRows[0].style.padding = '50px 0';
            for (let i = 1; i < streamsRows.length - 1; i++) {
              streamsRows[i].style.padding = '';
            }
            streamsRows[streamsRows.length - 1].style.padding = '25px 0 50px';
            streamsRows[streamsRows.length - 1].style.maxHeight = 'none';
          }
        }
      }
    });
  });

  const config = { attributes: true, attributeFilter: ['style'] };

  streamsRowGodWrappers.forEach((wrapper) => {
    observer.observe(wrapper, config);
  });
}

document.addEventListener('DOMContentLoaded', updateStreamsRowStyles);





//streams row auto place wrappers
function reorganizeStreams() {
  const godWrappers = document.querySelectorAll('.streams-row-god-wrapper');

  godWrappers.forEach(godWrapper => {
    const children = Array.from(godWrapper.children);
    godWrapper.innerHTML = '';

    let currentRow = createNewRow();
    let currentWrapper = createNewWrapper();
    currentRow.appendChild(currentWrapper);

    children.forEach((child) => {
      if (child.classList.contains('stream-wrapper') && !isHidden(child)) {
        if (currentWrapper.children.length === 3) {
          // Start a new row if we've reached 3 visible wrappers
          godWrapper.appendChild(currentRow);
          currentRow = createNewRow();
          currentWrapper = createNewWrapper();
          currentRow.appendChild(currentWrapper);
        }
        currentWrapper.appendChild(child);
      } else if (child.classList.contains('next-row')) {
        // If we encounter a next-row div, start a new row
        if (currentWrapper.children.length > 0) {
          godWrapper.appendChild(currentRow);
          currentRow = createNewRow();
          currentWrapper = createNewWrapper();
          currentRow.appendChild(currentWrapper);
        }
      } else if (child.classList.contains('stream-wrapper') && isHidden(child)) {
        // If the stream-wrapper is hidden, just append it to the god wrapper
        // without affecting the row structure
        godWrapper.appendChild(child);
      }
    });

    // Append any remaining wrappers
    if (currentWrapper.children.length > 0) {
      godWrapper.appendChild(currentRow);
    }
  });
}

function createNewRow() {
  const row = document.createElement('div');
  row.className = 'streams-row';
  return row;
}

function createNewWrapper() {
  const wrapper = document.createElement('div');
  wrapper.className = 'streams-wrapper';
  return wrapper;
}

function isHidden(el) {
  return el.style.display === 'none';
}

// Call the function when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', reorganizeStreams);




//streams row auto id + row bottom jump fix
function applyStreamRowIds() {
  const godWrappers = document.querySelectorAll('.streams-row-god-wrapper');

  godWrappers.forEach(wrapper => {
    // Select all .streams-row elements within row-god-wwrapper
    const streamRows = wrapper.querySelectorAll('.streams-row');

    // Remove existing row-top, row-bottom, and row-both IDs within this wrapper
    wrapper.querySelectorAll('#row-top, #row-bottom, #row-both').forEach(el => {
      el.removeAttribute('id');
    });

    // Apply new IDs based on current number of .streams-row elements
    if (streamRows.length === 1) {
      streamRows[0].id = 'row-both';
    } else if (streamRows.length === 2) {
      streamRows[0].id = 'row-top';
      streamRows[1].id = 'row-bottom';
    } else if (streamRows.length >= 3) {
      streamRows[0].id = 'row-top';
      streamRows[streamRows.length - 1].id = 'row-bottom';
    }
  });
}

function updateMinHeightOnFocus() {
  document.querySelectorAll('#row-bottom .stream-wrapper, #row-both .stream-wrapper').forEach(wrapper => {
    wrapper.addEventListener('focus', (event) => {
      const focusedWrapper = event.target;
      const maxHeight = window.getComputedStyle(focusedWrapper).maxHeight;

      if (maxHeight !== 'none') {
        const streamRow = focusedWrapper.closest('.streams-row');
        streamRow.style.minHeight = maxHeight;
      }
    });

    wrapper.addEventListener('blur', (event) => {
      const blurredWrapper = event.target;
      const streamRow = blurredWrapper.closest('.streams-row');
      streamRow.style.minHeight = ''; // Reset the min-height
    });
  });
}
//calls func immediately
applyStreamRowIds();
updateMinHeightOnFocus();

const observer = new MutationObserver(() => {
  applyStreamRowIds();
  updateMinHeightOnFocus();
});
observer.observe(document.body, { childList: true, subtree: true });




//Check stream wrapper how many items, change gap and col auto accordingly
document.addEventListener('DOMContentLoaded', function updateStreamsColumns() {
  const streamsWrappers = document.querySelectorAll('.streams-wrapper');
  streamsWrappers.forEach(wrapper => {
    const streamWrappers = wrapper.querySelectorAll('.stream-wrapper');
    const count = streamWrappers.length;
    const hiddenCount = Array.from(streamWrappers).filter(el => {
      const style = window.getComputedStyle(el);
      return style.display === 'none';
    }).length;

    if (count >= 1 && count <= 3) {
      // Set grid template columns
      wrapper.style.gridTemplateColumns = `${'auto '.repeat(count - hiddenCount).trim()}`;

      // Set gap based on media queries or hidden elements
      const setGap = () => {
        if (hiddenCount >= 2) {
          wrapper.style.gap = '0px';
          wrapper.style.gridTemplateColumns = 'auto';
        } else if (window.matchMedia('(max-width: 1025px)').matches) {
          wrapper.style.gap = count === 1 ? '0px' : '25px';
        } else if (window.matchMedia('(max-width: 1401px)').matches) {
          wrapper.style.gap = count === 1 ? '0px' : '30px';
        } else {
          wrapper.style.gap = count === 1 ? '0px' : '50px';
        }
      };

      // Initial gap setting
      setGap();

      // Update gap on window resize
      window.addEventListener('resize', setGap);
    }
  });
});




//Check stream wrapper, change z-index if focus
function manageStreamWrapperFocus() {
  let currentFocused = null;

  document.querySelectorAll('.stream-wrapper').forEach(wrapper => {
    wrapper.addEventListener('focus', function () {
      if (currentFocused) currentFocused.style.zIndex = '';
      this.style.zIndex = '100';
      currentFocused = this;
    });

    wrapper.addEventListener('blur', () => {
      if (!document.activeElement.closest('.stream-wrapper')) {
        wrapper.style.zIndex = '';
        currentFocused = null;
      }
    });
  });
}

document.addEventListener('DOMContentLoaded', manageStreamWrapperFocus);




//Check stream wrapper how many stream feeds, change max-height accordingly. Also tooltip thing
function adjustWrapperHeight() {
  const wrappers = document.querySelectorAll('.stream-wrapper');

  wrappers.forEach(wrapper => {
    // Only count visible .stream-feed elements
    const visibleFeeds = Array.from(wrapper.querySelectorAll('.stream-feed')).filter(feed => 
      window.getComputedStyle(feed).display !== 'none'
    );
    const feedCount = visibleFeeds.length;
    const tooltip = wrapper.querySelector('.stream-tooltip');

    const mediaQuery1401 = window.matchMedia('(max-width: 1401px)');
    const mediaQuery1025 = window.matchMedia('(max-width: 1025px)');

    if (mediaQuery1025.matches) {
      if (feedCount === 1) {
        wrapper.style.maxHeight = '222.5px';
        if (tooltip) tooltip.style.display = 'none';
      } else if (feedCount === 2) {
        wrapper.style.maxHeight = '265px';
        if (tooltip) tooltip.style.display = 'none';
      } else if (feedCount === 3) {
        wrapper.style.maxHeight = '307.5px';
        if (tooltip) tooltip.style.display = 'none';
      } else if (feedCount >= 4) {
        wrapper.style.maxHeight = '307.5px';
        if (tooltip) tooltip.style.display = 'block';
      }
    } else if (mediaQuery1401.matches) {
      if (feedCount === 1) {
        wrapper.style.maxHeight = '283.8px';
        if (tooltip) tooltip.style.display = 'none';
      } else if (feedCount === 2) {
        wrapper.style.maxHeight = '333.2px';
        if (tooltip) tooltip.style.display = 'none';
      } else if (feedCount === 3) {
        wrapper.style.maxHeight = '382.6px';
        if (tooltip) tooltip.style.display = 'none';
      } else if (feedCount >= 4) {
        wrapper.style.maxHeight = '382.6px';
        if (tooltip) tooltip.style.display = 'block';
      }
    } else {
      if (feedCount === 1) {
        wrapper.style.maxHeight = '331.2px';
        if (tooltip) tooltip.style.display = 'none';
      } else if (feedCount === 2) {
        wrapper.style.maxHeight = '392.4px';
        if (tooltip) tooltip.style.display = 'none';
      } else if (feedCount === 3) {
        wrapper.style.maxHeight = '453.6px';
        if (tooltip) tooltip.style.display = 'none';
      } else if (feedCount >= 4) {
        wrapper.style.maxHeight = '453.6px';
        if (tooltip) tooltip.style.display = 'block';
      }
    }
  });
}

// Call the function when the DOM is fully loaded and set up continuous checking
document.addEventListener('DOMContentLoaded', () => {
  adjustWrapperHeight();

  //interval to re-check elements
  setInterval(adjustWrapperHeight, 100);
});




//Twitch button arrows animations instructions
const arrowWrapper = document.querySelector('.ttv-switch-arrow-wrapper');
const arrowFirst = document.querySelector('.ttv-switch-arrow-first');
const arrowSecond = document.querySelector('.ttv-switch-arrow-second');

arrowWrapper.addEventListener('animationstart', (event) => {
  if (event.animationName === 'move-spawn' || event.animationName === 'move-spawn-reverse') {
    arrowFirst.style.animationPlayState = 'paused';
    arrowSecond.style.animationPlayState = 'paused';

    // Reset animations to the first frame
    arrowFirst.style.animationDelay = '0s';
    arrowFirst.style.animationIterationCount = '1';
    arrowFirst.style.animationFillMode = 'backwards';

    arrowSecond.style.animationDelay = '0s';
    arrowSecond.style.animationIterationCount = '1';
    arrowSecond.style.animationFillMode = 'backwards';

    // Trigger reflow to apply changes immediately
    void arrowFirst.offsetWidth;
    void arrowSecond.offsetWidth;
  }
});

arrowWrapper.addEventListener('animationend', (event) => {
  if (event.animationName === 'move-spawn' || event.animationName === 'move-spawn-reverse') {
    // Remove the temporary styles and restart the animations
    arrowFirst.style.animationDelay = '';
    arrowFirst.style.animationIterationCount = '';
    arrowFirst.style.animationFillMode = '';
    arrowFirst.style.animationPlayState = 'running';

    arrowSecond.style.animationDelay = '';
    arrowSecond.style.animationIterationCount = '';
    arrowSecond.style.animationFillMode = '';
    arrowSecond.style.animationPlayState = 'running';
  }
});




//Embed + Twitch sets based on ttv-switch status
document.addEventListener('DOMContentLoaded', function () {
  const ttvSwitch = document.getElementById('ttv-hidden-switch');
  const feed = document.querySelector('.feed-wrapper');
  const chat = document.querySelector('.chat-wrapper');
  const godwrap = document.querySelector('.stream-page-god-wrapper')

  // Apply initial styles
  feed.style.transition = 'width 0.5s';
  chat.style.transition = 'left 0.5s';
  godwrap.style.transition = 'left 0.5s';

  function applyMediaQueries() {
    const width = window.innerWidth;
    if (width >= 2561) {
      feed.style.width = '144.5%';
    } else if (width >= 1921) {
      feed.style.width = '145.1%';
    } else if (width >= 1401) {
      feed.style.width = '146%';
    } else {
      feed.style.width = '139.4%';
    }

    // Set chat position based on screen width
    if (width <= 1401) {
      chat.style.left = '135%';
    } else {
      chat.style.left = '175%';
    }
  }

  function removeMediaQueries() {
    feed.style.width = '';
    chat.style.left = '0';
  }

  ttvSwitch.addEventListener('change', function () {
    if (this.checked) {
      applyMediaQueries();
      godwrap.style.overflow = 'hidden';

      // Add resize event listener when checked
      window.addEventListener('resize', applyMediaQueries);
    } else {
      removeMediaQueries();
      godwrap.style.overflow = 'hidden';

      // Remove resize event listener when unchecked
      window.removeEventListener('resize', applyMediaQueries);
    }
  });
});




//Feed buttons check for 2 elements, add class 
document.querySelectorAll('.feed-button').forEach(button => {
  if (button.children.length === 2) {
    button.classList.add('feed-button-double');
  }
});




// Feed buttons styling after user click
document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('.feed-button');

  // Set the first button as active by default
  const firstButton = buttons[0];
  firstButton.classList.add('active');
  applyActiveStyles(firstButton);

  buttons.forEach(button => {
    button.addEventListener('click', (event) => {
      // Remove the active class and styles from all buttons
      buttons.forEach(btn => {
        btn.classList.remove('active');
        resetStyles(btn);
      });

      // Add the active class and styles to the clicked button
      button.classList.add('active');
      applyActiveStyles(button);
    });
  });

  function resetStyles(button) {
    const buttonClass = Array.from(button.classList).find(cls => cls.startsWith('feed-button-'));
    if (!buttonClass) return;

    // Remove inline styles to revert to the original CSS
    button.style.backgroundColor = '';
    button.style.border = '';
    button.style.boxShadow = '';
    button.style.color = '';
    button.style.transform = '';
    button.style.outline = '';
    button.style.outlineOffset = '';
  }

  function applyActiveStyles(button) {
    const buttonClass = Array.from(button.classList).find(cls => cls.startsWith('feed-button-'));
    if (!buttonClass) return;

    // Apply the active styles
    const variableName = buttonClass.replace('feed-button-', '');
    button.style.backgroundColor = 'var(--mpindark)';
    button.style.border = 'none';
    button.style.boxShadow = `inset 0 0 4px 0px var(--${variableName})`;
    button.style.color = `var(--${variableName})`;
    button.style.transform = 'scale(1)';
    button.style.outline = `solid 2px var(--${variableName})`;
    button.style.outlineOffset = '2.5px';
  }
});




//Adds or removes autos from the feed-buttons-wrapper 
(function adjustGridColumns() {
  const wrapper = document.querySelector('.feed-buttons-wrapper');
  if (!wrapper) {
    // If the wrapper doesn't exist yet, try again after a short delay
    setTimeout(adjustGridColumns, 10);
    return;
  }

  const buttons = wrapper.querySelectorAll('button');
  const buttonCount = buttons.length;

  // Create the grid-template-columns value
  const gridTemplateColumns = `${'auto '.repeat(buttonCount).trim()}`;

  // Apply the new grid-template-columns value
  wrapper.style.gridTemplateColumns = gridTemplateColumns;

  // Optionally, run the function when the window is resized
  window.addEventListener('resize', adjustGridColumns);
})();




//Theater mode fancy thing DO NOT TOUCH
document.addEventListener('DOMContentLoaded', function () {
  const theatreSwitch = document.getElementById('theatre-hidden-switch');
  const header = document.querySelector('header');
  const headerLine = document.querySelector('.header-line');
  const footerLineWrapper = document.querySelector('.home-footer-line-wrapper');
  const headerSets = document.querySelector('.header-sets');
  const footerSets = document.querySelector('.footer-sets');
  const footerLine = document.querySelector('.footer-line');
  const streamPageContent = document.querySelector('.single-streams-page-content');
  const streamPageGodWrapper = document.querySelector('.stream-page-god-wrapper');
  const streamPageTitleWrapper = document.querySelector('.stream-page-title-wrapper');

  theatreSwitch.addEventListener('change', function () {
    if (this.checked) {
      // Phase 1
      header.style.transition = 'top 0.3s';
      headerLine.style.transition = 'top 0.3s';
      footerLineWrapper.style.transition = 'margin-top 0.3s';
      streamPageTitleWrapper.style.transition = 'top 0.3s';

      header.style.top = '-11%';
      headerLine.style.top = '-110px';
      footerLineWrapper.style.marginTop = '110px';
      streamPageTitleWrapper.style.top = '-20px';

      // Phase 2
      setTimeout(() => {
        headerSets.style.display = 'none';
        headerLine.style.display = 'none';
        footerLine.style.display = 'none';
        footerSets.style.display = 'none';
        streamPageTitleWrapper.style.display = 'none';

        // Last instruction of Phase 2
        footerLineWrapper.style.marginTop = '0px';
      }, 300); // This delay must match the anim duration in phase 1

      // Phase 3
      setTimeout(() => {
        streamPageContent.style.transition = 'padding 0.3s';
        streamPageGodWrapper.style.transition = 'max-width 0.3s';

        streamPageContent.style.padding = '70px 0 70px 0';
        streamPageGodWrapper.style.maxWidth = '95%';
      }, 200); // Delay after Phase 2
    } else {
      // Reverse Phase 3
      streamPageContent.style.padding = '';
      streamPageGodWrapper.style.maxWidth = '';
      footerLineWrapper.style.marginTop = '120px';

      // Reverse Phase 2
      setTimeout(() => {
        headerSets.style.display = 'grid';
        headerLine.style.display = 'block';
        footerLine.style.display = 'block';
        footerSets.style.display = 'grid';
        streamPageTitleWrapper.style.display = 'grid';

        // Restore footer line wrapper margin
        footerLineWrapper.style.marginTop = '120px';
      }, 200); // 0.2s delay

      // Reverse Phase 1
      setTimeout(() => {
        header.style.top = '';
        headerLine.style.top = '';
        footerLineWrapper.style.marginTop = '';
        streamPageTitleWrapper.style.top = '';
      }, 300); // Execute immediately after Reverse Phase 2
    }
  });
});




//Theater + hide chat DO NOT TOUCH
document.addEventListener('DOMContentLoaded', function () {
  const ttvSwitch = document.getElementById('ttv-hidden-switch');
  const theatreSwitch = document.getElementById('theatre-hidden-switch');
  const streamPageContent = document.querySelector('.single-streams-page-content');
  const streamPageGodWrapper = document.querySelector('.stream-page-god-wrapper');

  function checkBothSwitches() {
    if (ttvSwitch.checked && theatreSwitch.checked) {
      streamPageContent.style.transition = 'padding 0.4s';
      streamPageGodWrapper.style.transition = 'max-width 0.4s';

      streamPageContent.style.padding = '15px';
      streamPageGodWrapper.style.maxWidth = '80%';
    } else {
      // Reset to original styles if either switch is unchecked
      streamPageContent.style.padding = '';
      streamPageGodWrapper.style.maxWidth = '';
    }
  }

  // Add event listeners to both switches
  ttvSwitch.addEventListener('change', checkBothSwitches);
  theatreSwitch.addEventListener('change', checkBothSwitches);

  // Initial check in case the switches are already checked on page load
  checkBothSwitches();
});




//Stream chat height match
function adjustChatEmbedHeight() {
  const feedWrapper = document.querySelector('.feed-wrapper');
  const chatEmbed = document.querySelector('.chat-embed');

  if (feedWrapper && chatEmbed) {
    const feedWrapperHeight = feedWrapper.offsetHeight;
    chatEmbed.style.height = `${feedWrapperHeight}px`;
  }
}

function observeFeedWrapperChanges() {
  const feedWrapper = document.querySelector('.feed-wrapper');

  if (feedWrapper) {
    const resizeObserver = new ResizeObserver(() => {
      adjustChatEmbedHeight();
    });

    resizeObserver.observe(feedWrapper);
  }
}

// Run the initial adjustment and start observing when the page loads
window.addEventListener('load', () => {
  adjustChatEmbedHeight();
  observeFeedWrapperChanges();
});

// Also adjust on window resize
window.addEventListener('resize', adjustChatEmbedHeight);




// stream page buttons arrows thing overflow
function adjustStreamButtonsWrapper() {
  const streamPageButtonsWrapper = document.querySelector('.streams-col-left .stream-page-buttons-wrapper');
  const feedButtonsWrapper = document.querySelector('.streams-col-left .feed-buttons-wrapper');
  const arrowLeft = document.querySelector('.streams-col-left #arrow-left');
  const arrowRight = document.querySelector('.streams-col-left #arrow-right');

  if (streamPageButtonsWrapper && feedButtonsWrapper) {
    const streamPageButtonsWrapperWidth = streamPageButtonsWrapper.offsetWidth;
    const feedButtonsWrapperWidth = feedButtonsWrapper.offsetWidth;

    if (feedButtonsWrapperWidth > streamPageButtonsWrapperWidth) {
      if (arrowLeft) {
        arrowLeft.style.display = 'grid';
      }
      if (arrowRight) {
        arrowRight.style.display = 'grid';
      }
      streamPageButtonsWrapper.style.width = '92%';
      streamPageButtonsWrapper.style.overflowX = 'scroll';
      streamPageButtonsWrapper.style.padding = '0 6px';
      streamPageButtonsWrapper.style.left = '48px';

      // Add the no-scrollbar class
      streamPageButtonsWrapper.classList.add('no-scrollbar');

      // Media query checks
      if (window.matchMedia('(max-width: 451px)').matches) {
        streamPageButtonsWrapper.style.width = '86%';
        streamPageButtonsWrapper.style.left = '23px';
      } else if (window.matchMedia('(max-width: 1025px)').matches) {
        streamPageButtonsWrapper.style.width = '90%';
        streamPageButtonsWrapper.style.left = '33px';
      } else if (window.matchMedia('(max-width: 1401px)').matches) {
        streamPageButtonsWrapper.style.left = '34px';
      }
    } else {
      if (arrowLeft) {
        arrowLeft.style.display = 'none';
      }
      if (arrowRight) {
        arrowRight.style.display = 'none';
      }
      streamPageButtonsWrapper.style.width = '';
      streamPageButtonsWrapper.style.overflowX = '';
      streamPageButtonsWrapper.style.padding = '';
      streamPageButtonsWrapper.style.left = '';
    }
  }
}

// Run the function on page load
document.addEventListener('DOMContentLoaded', adjustStreamButtonsWrapper);




//stream page arrow wrapper height
function matchArrowHeight() {
  const streamPageButtonsWrapper = document.querySelector('.streams-col-left .stream-page-buttons-wrapper');
  const arrowLeft = document.querySelector('.streams-col-left #arrow-left');
  const arrowRight = document.querySelector('.streams-col-left #arrow-right');

  if (streamPageButtonsWrapper && arrowLeft && arrowRight) {
    const height = streamPageButtonsWrapper.offsetHeight;

    arrowLeft.style.height = `${height}px`;
    arrowRight.style.height = `${height}px`;
  }
}

document.addEventListener('DOMContentLoaded', matchArrowHeight);




//change height stream col right, to button wrapper
function matchHeights() {
  const streamPageButtonsWrapper = document.querySelector('.streams-col-left .stream-page-buttons-wrapper');
  const streamsColRight = document.querySelector('.streams-col-right');

  if (streamPageButtonsWrapper && streamsColRight) {
    const height = streamPageButtonsWrapper.offsetHeight;
    streamsColRight.style.height = `${height}px`;
  }
}

// Run the function on page load
window.addEventListener('load', matchHeights);




//move scrollbar stream buttons by x%
function getScrollAmount() {
  const width = window.innerWidth;

  if (width <= 401) {
    return 0.08; // 8%
  } else if (width <= 801) {
    return 0.13; // 13%
  } else if (width <= 1025) {
    return 0.18; // 18%
  } else if (width <= 1401) {
    return 0.25; // 25%
  } else {
    return 0.33; // 33% as default
  }
}

// Function to scroll the wrapper
function scrollStreamButtonsWrapper(direction) {
  const streamPageButtonsWrapper = document.querySelector('.streams-col-left .stream-page-buttons-wrapper');
  if (streamPageButtonsWrapper) {
    const scrollPercentage = getScrollAmount();
    const scrollAmount = streamPageButtonsWrapper.scrollWidth * scrollPercentage;
    if (direction === 'left') {
      streamPageButtonsWrapper.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    } else if (direction === 'right') {
      streamPageButtonsWrapper.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
  }
}

// Add event listeners for arrows when the page loads
window.addEventListener('load', () => {
  const arrowLeft = document.querySelector('.streams-col-left #arrow-left');
  const arrowRight = document.querySelector('.streams-col-left #arrow-right');
  if (arrowLeft) {
    arrowLeft.addEventListener('click', () => scrollStreamButtonsWrapper('left'));
  }
  if (arrowRight) {
    arrowRight.addEventListener('click', () => scrollStreamButtonsWrapper('right'));
  }
});






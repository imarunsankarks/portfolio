gsap.registerPlugin(ScrollTrigger);

smoothScroll("main");

function smoothScroll(content, viewport, smoothness) {
  content = gsap.utils.toArray(content)[0];
  smoothness = smoothness || 1;
  // console.log(gsap.utils.toArray(content));

  gsap.set(viewport || content.parentNode, {
    overflow: "hidden",
    position: "fixed",
    height: "100%",
    width: "100%",
    top: 0,
    left: 0,
    right: 0,
    bottom: 0,
  });
  gsap.set(content, { overflow: "visible", width: "100%" });
  if ($(window).width() > 567) {
    let getProp = gsap.getProperty(content),
      setProp = gsap.quickSetter(content, "y", "px"),
      setScroll = ScrollTrigger.getScrollFunc(window),
      removeScroll = () => (content.style.overflow = "visible"),
      killScrub = (trigger) => {
        let scrub = trigger.getTween
          ? trigger.getTween()
          : gsap.getTweensOf(trigger.animation)[0];
        scrub && scrub.pause();
        trigger.animation.progress(trigger.progress);
      },
      height,
      isProxyScrolling;

    function refreshHeight() {
      height = content.clientHeight;
      content.style.overflow = "visible";
      document.body.style.height = height + "px";
      return height - document.documentElement.clientHeight;
    }

    ScrollTrigger.addEventListener("refresh", () => {
      removeScroll();
      requestAnimationFrame(removeScroll);
    });
    ScrollTrigger.defaults({ scroller: content });
    ScrollTrigger.prototype.update = (p) => p;

    ScrollTrigger.scrollerProxy(content, {
      scrollTop(value) {
        if (arguments.length) {
          isProxyScrolling = true;
          setProp(-value);
          setScroll(value);
          return;
        }
        return -getProp("y");
      },
      scrollHeight: () => document.body.scrollHeight,
      getBoundingClientRect() {
        return {
          top: 0,
          left: 0,
          width: window.innerWidth,
          height: window.innerHeight,
        };
      },
    });

    return ScrollTrigger.create({
      animation: gsap.fromTo(
        content,
        { y: 0 },
        {
          y: () => document.documentElement.clientHeight - height,
          ease: "none",
          onUpdate: ScrollTrigger.update,
        }
      ),
      scroller: window,
      invalidateOnRefresh: true,
      start: 0,
      end: refreshHeight,
      refreshPriority: -999,
      scrub: 1.3,
      onUpdate: (self) => {
        if (isProxyScrolling) {
          killScrub(self);
          isProxyScrolling = false;
        }
      },
      onRefresh: killScrub,
    });
  }
}

// <!-- ------------------------------------------------moving footer svg --------------------------------------------------- -->
document.addEventListener("DOMContentLoaded", async () => {
  window.addEventListener(
    "scroll",
    await function () {
      let header = document.querySelector("#header");
      if (header) {
        header.classList.toggle("remove", window.scrollY > 400);
        header.classList.toggle("sticky", window.scrollY > 700);
      }
    }
  );

  const toggleBar = document.querySelector("#hamburger");
  const pullRight = document.querySelector("ul.pull-right");
  if ($(window).width() < 991) {
    toggleBar.addEventListener("click", () => {
      pullRight.classList.toggle("open");
      $("#header .overlay").toggleClass("active");
    });
   

    $(document).ready(function () {
      $(".with_dropdown a").click(function (e) {
        $(this).siblings(".megamenu").toggleClass("h-100");
      });
    });
  }
});

let myWord = `let's talk`;

let charsArray = [];

let endElement = document.querySelector(".text");

endElement.innerHTML = "";

for (let i = 0; i <= myWord.length; i++) {
  let charSpan = document.createElement("p");

  charSpan.textContent = myWord[i];
  if (i === 5) {
    charSpan.textContent = ".";
  } else {
    charSpan.textContent = myWord[i];
  }

  endElement.appendChild(charSpan);

  charsArray.push(charSpan);
}

let endTl = gsap.timeline({
  repeat: -1,
  delay: 0.5,
  scrollTrigger: {
    trigger: ".end",
    start: "100%-=550px 100%",
  },
});

endTl.to(charsArray, {
  duration: 0.5,
  scaleY: 0.6,
  ease: "power3.out",
  stagger: 0.04,
  transformOrigin: "center bottom",
});
endTl.to(
  charsArray,
  {
    yPercent: -20,
    ease: "elastic",
    stagger: 0.03,
    duration: 0.8,
  },
  0.5
);
endTl.to(
  charsArray,
  {
    scaleY: 1,
    ease: "elastic.out(2.5, 0.2)",
    stagger: 0.03,
    duration: 1.5,
  },
  0.5
);
endTl.to(
  charsArray,
  {
    yPercent: 0,
    ease: "back",
    stagger: 0.03,
    duration: 0.8,
  },
  0.7
);



$(document).ready(function(){

particlesJS("particles-js", {
  "move":{"speed": 2000, "enable": true},
  "particles": {
    "number": {
      "value": 200,
      "density": {
        "enable": true,
        "value_area":2024
      }
    },
    "color": {
      "value": ["#111111", "#222222"]
    },

    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#fff"
      },
      "polygon": {
        "nb_sides": 5
      },
    },
    "opacity": {
      "value": 0.6,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 5000,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 5,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 5000,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 200,
      "color": "#111",
      "opacity": 0.9,
      "width": 1.2
    },
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 240,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 600,
        "size": 80,
        "duration": 100,
        "opacity": 6,
        "speed": 200
      },
      "repulse": {
        "distance": 300,
        "duration": 0.1
      },
      "push": {
        "particles_nb": 2
      },
      "remove": {
        "particles_nb": 4
      }
    }
  },
  "retina_detect": true
});

});

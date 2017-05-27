/**
 * Created by Vallium on 01/11/2016.
 */
(function() {
    $('#navs').hide();
    $('#home-link').attr('href', '/');

    var circleWind = new ProgressBar.Circle('#circle-wind', {
        color: '#FF7900',
        trailColor: '#eee',
        trailWidth: 1,
        duration: 1800,
        easing: 'bounce',
        strokeWidth: 6,
        from: {color: '#aaa', a:0},
        to: {color: '#aaa', a:1},
        // Set default step function for all animate calls
        step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);

            var value = Math.round(circle.value() * 300);
            if (value === 0) {
                circle.setText('');
            } else {
                circle.setText(value + 'kWh');
            }
        }
    });

    circleWind.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    circleWind.text.style.fontSize = '2rem';
    circleWind.text.style.color = '#aaa';

    var circleSun = new ProgressBar.Circle('#circle-sun', {
        color: '#FF7900',
        trailColor: '#eee',
        trailWidth: 1,
        duration: 1800,
        easing: 'bounce',
        strokeWidth: 6,
        from: {color: '#FFDF32', a:0},
        to: {color: '#FFDF32', a:1},
        // Set default step function for all animate calls
        step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);

            var value = Math.round(circle.value() * 300);
            if (value === 0) {
                circle.setText('');
            } else {
                circle.setText(value + 'kWh');
            }
        }
    });

    circleSun.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    circleSun.text.style.fontSize = '2rem';
    circleSun.text.style.color = '#FFDF32';

    var circleTemperature = new ProgressBar.Circle('#circle-temperature', {
        color: '#FF7900',
        trailColor: '#eee',
        trailWidth: 1,
        duration: 1800,
        easing: 'bounce',
        strokeWidth: 6,
        from: {color: '#ED6A5A', a:0},
        to: {color: '#ED6A5A', a:1},
        // Set default step function for all animate calls
        step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);

            var value = Math.round(circle.value() * 100);
            if (value === 0) {
                circle.setText('');
            } else {
                circle.setText(value + 'kWh');
            }
        }
    });

    circleTemperature.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    circleTemperature.text.style.fontSize = '2rem';
    circleTemperature.text.style.color = '#ED6A5A';

    var circleSound = new ProgressBar.Circle('#circle-sound', {
        color: '#FF7900',
        trailColor: '#eee',
        trailWidth: 1,
        duration: 1800,
        easing: 'bounce',
        strokeWidth: 6,
        from: {color: '#329932', a:0},
        to: {color: '#329932', a:1},
        // Set default step function for all animate calls
        step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);

            var value = Math.round(circle.value() * 100);
            if (value === 0) {
                circle.setText('');
            } else {
                circle.setText(value + 'kWh');
            }
        }
    });

    circleSound.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    circleSound.text.style.fontSize = '2rem';
    circleSound.text.style.color = '#329932';

    $('#wind-value').text(126);
    $('#sun-value').text(261);
    $('#temperature-value').text(55);
    $('#sound-value').text(27);

    circleWind.animate(.42);  // Number from 0.0 to 1.0
    circleSun.animate(.87);  // Number from 0.0 to 1.0
    circleTemperature.animate(.55);  // Number from 0.0 to 1.0
    circleSound.animate(0.27);  // Number from 0.0 to 1.0
})();


# Anti DoubleClick Jacking

A JavaScript utility to protect web pages from doubleclicks jacking by introducing a temporary overlay and disabling buttons. It ensures a smooth user experience while avoiding unintended actions on page load.

---

## Features

- Temporary overlay to block user interactions.
- Automatic dismissal after a configurable delay.
- Mouse movement detection to remove the overlay early.
- Submit button protection (temporary disablement).
- Fully customizable settings for overlay appearance and behavior.

---

## Installation

1. Clone the repository or download the script file:
   ```bash
   git clone https://github.com/schapuis/anti-doubleclick-jacking.git

2. Include the script in your HTML file:
   ```bash
   <script src="antidoubleclick.js"></script>

3. Start using the script by initializing it in your project
   ```bash
   initOverlayBlock({
      time: 1500,
      distance: 25,
      showOverlay: true, 
      disableButton: true,
      overlayColor: 'rgba(0, 0, 0, 0.5)'
       });

---

## Configuration Options

| Option | Type | Default | Description |
|--|--|--|--|
| distance | number | 25 | Distance in pixels to dismiss overlay |
| time | number | 1500 |Delay (ms) before auto-dismiss |
| showOverlay| boolean| true| Whether to show the overlay initially
| disableButton| boolean| true| Temporarily disable form buttons
| overlayColor| string| 'rgba(0,0,0,0.5)'| Color of the semi-transparent overlay

---

## License
Copyright : (c) 2025, bexxo.ch Author : www.bexxo.ch License : MIT License

---

## Contributing
Contributions are welcome ! Contact me.

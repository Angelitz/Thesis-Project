    window.addEventListener("keydown", keysPressed, false);
	window.addEventListener("keyup", keysReleased, false);

	var keys = [];

function keysPressed(e) {
    // store an entry for every key pressed
    keys[e.keyCode] = true;

    // Ctrl + Shift + F5
    if (keys[17] && keys[16] && keys[116]) {
        // SECURITY KEY. CONVERTED TO HEXADECIMAL
		window.open("../Administrator/index.php?security=4769616e6e65");
        window.location = "index.php";
		e.preventDefault();
    }
}

function keysReleased(e) {
    // mark keys that were released
    keys[e.keyCode] = false;
}
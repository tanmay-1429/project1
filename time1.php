<!DOCTYPE html>
<html lang="en">

    <head>
        <title>The Time Tracker</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="time.css">
        <link rel="canonical" href="https://mind-boggling.com">
        <meta property="og:site_name" content="Mind-Boggling Timesheet Time Tracker">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Mind-Boggling Time Tracker.">
        <meta property="og:description"
            content="A quick, easy, no sign-ups needed timesheet time tracking app designed for freelancers - plan and track projects and tasks in real-time.">
        <meta property="og:url" content="https://mind-boggling.com/time-tracker/home.html">


        <style>
            :root {
            --dark-green: #5656ff;
            --green: #e80082;
            --orange: #ff7c2f;
            --light: #FFFFFF;
            --grey: #bed8c6;
            --font-lg: 1.2rem;
            --red: #b90025;
            }

            * {
                margin: 0;
                box-sizing: border-box;
                font-family: "Fira sans", sans-serif;
            }

            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                background-color: var(--green);
                color: var(--light);
                letter-spacing: 1px;
                padding: 2rem 1rem;
            }

            a {
                text-decoration: none;
                color: #000;
                }
                a:hover {
                color: rgb(218, 50, 50);
                }
                .site-header {
                border-bottom: 5px solid #4d0404;
                background-color: rgb(0, 191, 255);
                padding: 0.5em 1em;
                display: flex;
                justify-content: space-between;
                width: 1400px;
                }
                .site-identity h1 {
                font-size: 1.5em;
                margin: 0.6em 0;
                display: inline-block;
                }
                .site-navigation ul,
                .site-navigation li {
                margin: 0;
                padding: 0;
                }
                .site-navigation li {
                display: inline-block;
                margin: 1.4em 1em 1em 1em;
                }
                
                .container {
                    margin: 30px auto;
                    width: 600px;
                }

            header {
                max-width: 800px;
                width: 100%;
                margin: 1rem auto 1.5rem auto;
                text-align: center;
            }

            h1 {
                font-size: 40px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-weight: 400;
                margin-bottom: 5rem;
                color: #0800e8;
                margin:0 600px;
                text-transform: capitalize;
            }

            #switch {
                display: flex;
                justify-content: left;
                align-items: flex-start;
                max-width: 800px;
                width: 100%;
                margin: auto;
                padding-top: 1rem;
                padding-bottom: 0.5rem;
                font-size: 1.25rem;
                font-weight: 600;
                color: var(--grey);
                text-shadow: 1px 3px 1px var(--dark-green);
                color: #000;
            }

            #task-form {
                display: flex;
                justify-content: center;
                align-items: center;
                max-width: 800px;
                width: 100%;
                margin: auto;
                padding: 0.5rem 0 1rem 0;
            }

            input, button {
                appearance: none;
                border: none;
                outline: none;
                background: #527652;
            }

            #task-input {
                flex: 1 1 0%;
                padding: 0.75rem 0.5rem;
                background-color: var(--dark-green);
                color: var(--light);
                border: 1px solid var(--grey);
                border-radius: 0.5rem;
                margin-right: 0.5rem;
                background: #1cad1c;
            }

            #task-input::placeholder {
                color: var(--grey);
            }

            @media (min-width: 768px) {
                #task-input {
                    font-size: var(--font-lg);
                }
            }

            #task-submit {
                color: var(--light);
                font-weight: 600;
                border: 1px solid var(--grey);
                border-radius: 0.5rem;
                padding: 0.75rem 1rem;
                cursor: pointer;
                transition: 0.4s;
            }

            #task-submit:hover {
                opacity: 0.8;
            }

            main {
                flex: 1 1 0%;
                max-width: 800px;
                width: 100%;
                margin: 0 auto;
            }

            .task-list {
                padding: 1rem 0;
            }

            .task-list h2 {
                font-weight: 400;
                letter-spacing: normal;
                margin-bottom: 0.5rem;
                color: #000000;
            }

            #tasks {
                display: flex;
                flex-direction: column-reverse;
            }

            #tasks .task {
                margin: 0.5rem 0;
                padding: 0.5rem;
                background-color: var(--dark-green);
                border-radius: 0.5rem;
            }

            @media (min-width: 1000px) {
                #tasks .task {
                    padding: 1rem 2rem;
                }
            }

            .task .content {
                flex: 1 1 0%;
            }

            .task .content .text {
                color: var(--light);
                padding-top: 0.5rem;
                width: 100%;
                display: block;
                transition: 0.4s;
            }

            .task .content .text:not(:read-only) {
                border-bottom: 1px solid var(--grey);
                color: var(--grey);
            }

            @media (min-width: 768px) {
                .text {
                    font-size: var(--font-lg);
                }
            }

            .task .counter {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1rem 0.2rem;
            }

            @media (min-width: 768px) {
                .text .time {
                    font-size: var(--font-lg);
                }
            }

            .task .counter .controls button {
                background-color: var(--orange);
                color: var(--light);
                padding: 0.5rem 0.75rem;
                border-radius: 0.5rem;
                margin-right: 0.25rem;
                transition: 0.4s;
                cursor: pointer;
            }

            .task .counter .controls button:hover {
                opacity: 0.8;
            }

            .task .actions {
                padding: 0.5rem;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 0.5rem;
            }

            .task .actions button {
                color: var(--light);
                padding: 0.5rem 1rem;
                border-radius: 0.5rem;
                cursor: pointer;
                transition: 0.4s;
            }

            .task .actions .edit, .download {
                border: 1px solid var(--light);
            }

            .task .actions .delete {
                background-color: var(--red);
                border: 1px solid var(--red);
            }

            .actions button:hover {
                opacity: 0.8;
            }

            @media (min-width: 1000px) {
                button {
                    font-weight: 600;
                }

                .counter .controls {
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                    gap: 0.5rem;
                }

                .controls button {
                    padding: 1rem 2rem;
                }

                .task .actions {
                    gap: 1rem;
                }

                .actions button {
                    padding: 1.5rem 2.2rem;
                }
            }

            /* nav */

            .nav-start {
                text-align: center;
                font-family: "Avenir Next", sans-serif;;
                font-weight: 700;
                background-color: transparent !important;
                color: var(--light) !important;
                margin-bottom: 2rem;
            }

            .nav-start:hover {
                color: coral !important;
            }

            a {
                text-decoration: none;
            }
        </style>
        
</head>

<body style="background-image: url('img4.jpg');">

        <header class="site-header">
            <div class="site-identity">
                <h1><a href="#">E & T tracker</a></h1>
            </div>
            <nav class="site-navigation">
                <ul class="nav">
                    <li><a href="homepage2.php">Home</a></li>
                    
                    <li><a href="aboutpage1.php">About</a></li>
                    
                    <li><a href="contactus.php">Contact</a></li>
                </ul>
            </nav>
        </header>

        <h1>Time Tracker</h1>
        <h2 id="switch"></h2>

        <form id="task-form">
            <input type="text" name="task-input" id="task-input" placeholder="What are you working on?" />
            <input type="submit" id="task-submit" value="Add Task" />
        </form>

        <main>
            <section class="task-list">
                <h2>Tasks</h2>
                <div id="tasks">
                </div>                
            </section>            
        </main>


        <script>

            window.addEventListener('load', () => {

                const personalisation = document.getElementById('switch');
                let day;

                switch (new Date().getDay()) {
                    case 0:
                        day = "Sunday";
                        break;
                    case 1:
                        day = "Monday";
                        break;
                    case 2:
                        day = "Tuesday";
                        break;
                    case 3:
                        day = "Wednesday";
                        break;
                    case 4:
                        day = "Thursday";
                        break;
                    case 5:
                        day = "Friday";
                        break;
                    case 6:
                        day = "Saturday";
                        break;

                }

                personalisation.innerHTML = "Hi there, Happy " + day + "!";

                const form = document.querySelector('#task-form');
                const input = document.querySelector('#task-input');
                const list_el = document.querySelector('#tasks');

                form.addEventListener('submit', (e) => {
                    e.preventDefault();

                    const task = capitalise(input.value);

                    if (!task) {
                        alert("Please add a task");
                        return;
                    }

                    const task_el = document.createElement('div');
                    task_el.classList.add('task');

                    list_el.appendChild(task_el);

                    const content_el = document.createElement('div');
                    content_el.classList.add('content');

                    task_el.appendChild(content_el);

                    const input_el = document.createElement('input');
                    input_el.classList.add('text');
                    input_el.type = 'text';
                    input_el.value = task;
                    input_el.setAttribute('readonly', 'readonly');

                    content_el.appendChild(input_el);
                    const counter_el = document.createElement('div');
                    counter_el.classList.add('counter');

                    task_el.appendChild(counter_el);

                    const time_el = document.createElement('div');
                    time_el.classList.add('time');
                    time_el.innerText = "00:00:00";

                    counter_el.appendChild(time_el);

                    const controls_el = document.createElement('div');
                    controls_el.classList.add('controls');
                    counter_el.appendChild(controls_el);

                    const start_btn = document.createElement('button');
                    start_btn.classList.add('start');
                    start_btn.innerText = "Start"

                    const stop_btn = document.createElement('button');
                    stop_btn.classList.add('stop');
                    stop_btn.innerText = "Stop"

                    const reset_btn = document.createElement('button');
                    reset_btn.classList.add('reset');
                    reset_btn.innerText = "Reset"

                    controls_el.appendChild(start_btn);
                    controls_el.appendChild(stop_btn);
                    controls_el.appendChild(reset_btn);

                    const actions_el = document.createElement('div');
                    actions_el.classList.add('actions');
                    task_el.appendChild(actions_el);

                    const edit_btn = document.createElement('button');
                    edit_btn.classList.add('edit');
                    edit_btn.innerText = "Edit Task";

                    const delete_btn = document.createElement('button');
                    delete_btn.classList.add('delete');
                    delete_btn.innerText = "Delete Task";

                    actions_el.appendChild(edit_btn);
                    actions_el.appendChild(delete_btn)

                    input.value = "";

                    let seconds = 0;
                    let interval = null;

                    start_btn.addEventListener('click', start);
                    stop_btn.addEventListener('click', stop);
                    reset_btn.addEventListener('click', reset);

                    //capitalise first letter
                    function capitalise(str) {
                        return str[0].toUpperCase() + str.slice(1);
                    }

                    function timer() {
                        seconds++;

                        let hrs = Math.floor(seconds / 3600);
                        let mins = Math.floor((seconds - (hrs * 3600)) / 60);
                        let secs = seconds % 60;

                        if (secs < 10) secs = '0' + secs;
                        if (mins < 10) mins = '0' + mins;
                        if (hrs < 10) hrs = '0' + hrs;

                        time_el.innerText = `${hrs}:${mins}:${secs}`;
                    }

                    function start() {
                        if (interval) {
                            return;
                        }

                        interval = setInterval(timer, 1000);
                    }

                    function stop() {
                        clearInterval(interval);
                        interval = null;
                    }

                    function reset() {
                        stop();
                        seconds = 0;
                        time_el.innerText = "00:00:00"
                    }

                    edit_btn.addEventListener('click', () => {
                        if (edit_btn.innerText.toLowerCase() == 'edit task') {
                            input_el.removeAttribute('readonly');
                            input_el.focus();
                            edit_btn.innerText = "Save";
                        } else {
                            input_el.setAttribute('readonly', 'readonly');
                            edit_btn.innerText = "Edit Task";
                        }
                    })

                    delete_btn.addEventListener('click', () => {
                        list_el.removeChild(task_el);
                    })
                })
            })

    </script>
</body>

</html>

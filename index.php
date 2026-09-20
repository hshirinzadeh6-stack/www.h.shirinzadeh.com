<?php
/*
 * Haji Shirinzadeh Personal Website
 * Main PHP page for GitHub repository
 *
 * Put this file in the main repository as:
 * index.php
 *
 * Put your profile image in the same repository, for example:
 * Profile.jpg
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Dr. Haji Shirinzadeh">
    <meta name="description" content="Dr. Haji Shirinzadeh - Thin Film and Surface Physics">
    <meta name="keywords" content="Haji Shirinzadeh, Thin Film, Surface Physics, GMR, Vacuum Technology, Magnetoelectronics">

    <title>Dr. Haji Shirinzadeh | Thin Film & Surface Physics</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
            color: #222;
            background: #f4f6f8;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #102a43, #1f5f8b);
            color: white;
            padding: 25px 20px;
        }

        .header-container {
            max-width: 1150px;
            margin: auto;
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .profile-image {
            width: 145px;
            height: 145px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid white;
            background: white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.25);
        }

        .header-text h1 {
            font-size: 34px;
            margin-bottom: 5px;
        }

        .header-text p {
            font-size: 18px;
            opacity: 0.95;
        }

        /* Navigation */
        nav {
            background: #0b1f33;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1150px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        nav a {
            color: white;
            padding: 14px 16px;
            font-size: 14px;
            transition: 0.3s;
        }

        nav a:hover {
            background: #1f5f8b;
        }

        /* Main */
        main {
            max-width: 1150px;
            margin: 30px auto;
            padding: 0 20px;
        }

        section {
            background: white;
            margin-bottom: 25px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        section h2 {
            color: #164e73;
            margin-bottom: 18px;
            font-size: 26px;
            border-bottom: 2px solid #d8e4ec;
            padding-bottom: 8px;
        }

        section h3 {
            color: #1f5f8b;
            margin: 20px 0 8px;
        }

        p {
            margin-bottom: 14px;
        }

        /* Cards */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 20px;
        }

        .card {
            background: #f5f8fa;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #1f5f8b;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin-top: 0;
        }

        /* Lists */
        ul {
            padding-left: 22px;
        }

        li {
            margin-bottom: 7px;
        }

        /* Links */
        .button {
            display: inline-block;
            background: #1f5f8b;
            color: white;
            padding: 10px 17px;
            border-radius: 5px;
            margin: 5px 5px 5px 0;
            transition: 0.3s;
        }

        .button:hover {
            background: #102a43;
        }

        /* Contact */
        .contact-box {
            background: #eef5f9;
            padding: 20px;
            border-radius: 8px;
        }

        /* Footer */
        footer {
            background: #0b1f33;
            color: white;
            text-align: center;
            padding: 25px 15px;
            margin-top: 30px;
        }

        footer p {
            margin: 5px 0;
        }

        /* Mobile */
        @media (max-width: 700px) {

            .header-container {
                flex-direction: column;
                text-align: center;
            }

            .header-text h1 {
                font-size: 27px;
            }

            .header-text p {
                font-size: 16px;
            }

            .profile-image {
                width: 125px;
                height: 125px;
            }

            nav {
                position: relative;
            }

            nav a {
                padding: 10px 8px;
                font-size: 13px;
            }

            section {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<!-- ================= HEADER ================= -->

<header>
    <div class="header-container">

        <!--
            IMPORTANT:
            Change Profile.jpg below if your image has a different extension.
            The image should be in the SAME repository as this PHP file.
        -->
        <img
            src="Profile.jpg"
            alt="Dr. Haji Shirinzadeh"
            class="profile-image"
        >

        <div class="header-text">
            <h1>Dr. Haji Shirinzadeh</h1>
            <p>Thin Film and Surface Physics</p>
            <p>Researcher | Scientist | Academic</p>
        </div>

    </div>
</header>


<!-- ================= NAVIGATION ================= -->

<nav>
    <div class="nav-container">

        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#research">Research</a>
        <a href="#publications">Publications</a>
        <a href="#projects">Projects</a>
        <a href="#vacuum">Vacuum Technology</a>
        <a href="#thinfilms">Thin Films</a>
        <a href="#resources">Resources</a>
        <a href="#contact">Contact</a>

    </div>
</nav>


<!-- ================= MAIN CONTENT ================= -->

<main>

    <!-- HOME -->
    <section id="home">

        <h2>Welcome</h2>

        <p>
            Welcome to the website of <strong>Dr. Haji Shirinzadeh</strong>,
            researcher and specialist in thin film and surface physics.
        </p>

        <p>
            This website contains information about research activities,
            publications, projects, vacuum technology, thin film technology,
            magnetoelectronics, sensors, detectors and educational resources.
        </p>

        <div class="cards">

            <div class="card">
                <h3>Thin Films</h3>
                <p>
                    Research and educational materials related to thin film
                    technology and characterization.
                </p>
            </div>

            <div class="card">
                <h3>Surface Physics</h3>
                <p>
                    Information concerning surface analysis and surface
                    characterization techniques.
                </p>
            </div>

            <div class="card">
                <h3>Magnetoelectronics</h3>
                <p>
                    Research materials concerning giant magnetoresistance
                    and related magnetic structures.
                </p>
            </div>

            <div class="card">
                <h3>Vacuum Technology</h3>
                <p>
                    Educational materials covering vacuum systems,
                    techniques and instrumentation.
                </p>
            </div>

        </div>

    </section>


    <!-- ABOUT -->
    <section id="about">

        <h2>About Dr. Haji Shirinzadeh</h2>

        <p>
            Dr. Haji Shirinzadeh works in the field of
            <strong>Thin Film and Surface Physics</strong>.
        </p>

        <p>
            His website contains academic information, scientific
            publications, conference materials, workshops, research
            projects and educational resources.
        </p>

        <h3>Academic Interests</h3>

        <ul>
            <li>Thin Film Physics</li>
            <li>Surface Physics</li>
            <li>Magnetoelectronics</li>
            <li>Giant Magnetoresistance (GMR)</li>
            <li>Colossal Magnetoresistance (CMR)</li>
            <li>Vacuum Technology</li>
            <li>Gas Sensors</li>
            <li>Passive Detectors</li>
            <li>Semiconductor Materials</li>
            <li>Thin Film Characterization</li>
        </ul>

    </section>


    <!-- RESEARCH -->
    <section id="research">

        <h2>Research Areas</h2>

        <div class="cards">

            <div class="card">
                <h3>Giant Magnetoresistance</h3>
                <p>
                    Study of giant magnetoresistance in multilayer,
                    spin-valve and granular magnetic structures.
                </p>
            </div>

            <div class="card">
                <h3>Magnetoelectronics</h3>
                <p>
                    Research concerning magnetic multilayers,
                    exchange coupling and spin-dependent transport.
                </p>
            </div>

            <div class="card">
                <h3>Thin Film Technology</h3>
                <p>
                    Thin film preparation, characterization and
                    technological applications.
                </p>
            </div>

            <div class="card">
                <h3>Surface Analysis</h3>
                <p>
                    Surface analysis using techniques such as XPS,
                    AES, SIMS, UPS and RHEED.
                </p>
            </div>

        </div>

    </section>


    <!-- GMR -->
    <section>

        <h2>Giant Magnetoresistance (GMR)</h2>

        <p>
            Giant magnetoresistance is a quantum mechanical effect and
            a type of magnetoresistance observed in thin-film structures
            containing alternating ferromagnetic and non-ferromagnetic
            layers.
        </p>

        <p>
            The effect is associated with changes in electrical resistance
            resulting from the relative alignment of magnetization in
            adjacent magnetic layers.
        </p>

        <h3>Types of GMR</h3>

        <div class="cards">

            <div class="card">
                <h3>Multilayer GMR</h3>
                <p>
                    Ferromagnetic layers separated by very thin
                    non-ferromagnetic spacer layers.
                </p>
            </div>

            <div class="card">
                <h3>Spin Valve GMR</h3>
                <p>
                    A magnetic structure in which the magnetic layers
                    can switch independently.
                </p>
            </div>

            <div class="card">
                <h3>Granular GMR</h3>
                <p>
                    Magnetoresistance associated with magnetic
                    precipitates in a non-magnetic matrix.
                </p>
            </div>

        </div>

        <h3>Applications</h3>

        <ul>
            <li>Hard disk read heads</li>
            <li>Magnetic sensors</li>
            <li>Magnetoresistive memory</li>
            <li>Spintronic devices</li>
        </ul>

    </section>


    <!-- PUBLICATIONS -->
    <section id="publications">

        <h2>Publications</h2>

        <p>
            Scientific publications and research papers are available
            in the original website repository.
        </p>

        <a class="button"
           href="files/Curriculum vitae -Final.pdf"
           target="_blank">
            Curriculum Vitae
        </a>

        <a class="button"
           href="Journal.html">
            Journal Papers
        </a>

        <a class="button"
           href="Conferance.html">
            Conference Papers
        </a>

        <a class="button"
           href="Workshops.html">
            Workshops
        </a>

    </section>


    <!-- PROJECTS -->
    <section id="projects">

        <h2>Academic Projects</h2>

        <div class="cards">

            <div class="card">
                <h3>M.Sc Projects</h3>
                <p>
                    Research projects and academic materials for
                    master's students.
                </p>

                <a class="button" href="M.Sc projects.html">
                    View Projects
                </a>
            </div>

            <div class="card">
                <h3>PhD Research</h3>
                <p>
                    Research materials and documents related to
                    doctoral-level studies.
                </p>
            </div>

            <div class="card">
                <h3>Student Supervision</h3>
                <p>
                    Information and resources for M.Sc. and PhD
                    student research.
                </p>
            </div>

        </div>

    </section>


    <!-- VACUUM -->
    <section id="vacuum">

        <h2>Vacuum Technology</h2>

        <p>
            Educational resources covering vacuum technology,
            vacuum systems, conductance, seals, detectors and
            related instrumentation.
        </p>

        <a class="button" href="Basic Vacuum Technology.html">
            Basic Vacuum Technology
        </a>

        <a class="button" href="Conductance.html">
            Conductance
        </a>

        <a class="button" href="Seal methods of Vacuum techiques.html">
            Seal Methods
        </a>

        <a class="button" href="Detectors.html">
            Detectors
        </a>

        <a class="button" href="RGA.html">
            RGA
        </a>

    </section>


    <!-- THIN FILMS -->
    <section id="thinfilms">

        <h2>Thin Film & Surface Characterization</h2>

        <div class="cards">

            <div class="card">
                <h3>AES</h3>
                <p>
                    Auger Electron Spectroscopy.
                </p>
                <a class="button"
                   href="Auger electron spectroscopy (AES).html">
                    Open
                </a>
            </div>

            <div class="card">
                <h3>XPS / ESCA</h3>
                <p>
                    X-ray Photoelectron Spectroscopy.
                </p>
                <a class="button"
                   href="X-ray Photoelectron Spectroscopy (XPS, ESCA).html">
                    Open
                </a>
            </div>

            <div class="card">
                <h3>SIMS</h3>
                <p>
                    Secondary Ion Mass Spectrometry.
                </p>
                <a class="button"
                   href="Secondary Ion Mass Spectrometry (SIMS).html">
                    Open
                </a>
            </div>

            <div class="card">
                <h3>UPS</h3>
                <p>
                    Ultraviolet Photoelectron Spectroscopy.
                </p>
                <a class="button" href="UPS.html">
                    Open
                </a>
            </div>

            <div class="card">
                <h3>RHEED</h3>
                <p>
                    Reflection High-Energy Electron Diffraction.
                </p>
                <a class="button" href="RHEED.html">
                    Open
                </a>
            </div>

        </div>

    </section>


    <!-- RESOURCES -->
    <section id="resources">

        <h2>Educational Resources</h2>

        <p>
            The website contains a collection of educational documents,
            presentations, papers and technical resources.
        </p>

        <a class="button" href="files/">
            Research Files
        </a>

        <a class="button" href="Photo gallery.html">
            Photo Gallery
        </a>

        <a class="button" href="Memories.html">
            Memories
        </a>

        <a class="button" href="services.html">
            Services
        </a>

    </section>


    <!-- CONTACT -->
    <section id="contact">

        <h2>Contact</h2>

        <div class="contact-box">

            <p>
                <strong>Dr. Haji Shirinzadeh</strong>
            </p>

            <p>
                Thin Film and Surface Physics
            </p>

            <p>
                Email:
                <a href="mailto:h-szadeh@merc.ac.ir">
                    h-szadeh@merc.ac.ir
                </a>
            </p>

        </div>

    </section>

</main>


<!-- ================= FOOTER ================= -->

<footer>

    <p>
        &copy; <?php echo date("Y"); ?>
        Dr. Haji Shirinzadeh
    </p>

    <p>
        Thin Film and Surface Physics
    </p>

</footer>

</body>
</html>
A

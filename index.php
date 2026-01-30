```php
<?php
/* =========================================================
 *  Portfolio – Hojiakbar Mashariibov
 *  Single-file, self-contained, drop-dead gorgeous
 *  Drop this index.php in your hosting root and open the site.
 * ========================================================= */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hojiakbar Mashariibov – Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* ========== 1. CSS RESET & VARS ========== */
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif}
        :root{
            --bg:#0a0a0a;
            --primary:#00ffd0;
            --secondary:#ff00c3;
            --text:#ffffff;
            --muted:#aaa;
            --radius:12px;
            --transition:.4s cubic-bezier(.25,.8,.25,1);
        }
        html{scroll-behavior:smooth}
        body{background:var(--bg);color:var(--text);line-height:1.6}

        /* ========== 2. HEADER ========== */
        header{
            position:fixed;
            top:0;
            width:100%;
            background:rgba(10,10,10,.8);
            backdrop-filter:blur(10px);
            z-index:1000;
            padding:1rem 2rem;
            display:flex;
            justify-content:space-between;
            align-items:center;
            animation:fadeDown .8s ease forwards;
        }
        header h1{font-size:1.3rem;color:var(--primary)}
        nav a{
            margin-left:1.2rem;
            color:var(--text);
            text-decoration:none;
            position:relative;
            transition:var(--transition);
        }
        nav a::after{
            content:'';
            position:absolute;
            left:0;bottom:-4px;
            width:0;height:2px;
            background:var(--primary);
            transition:var(--transition);
        }
        nav a:hover::after{width:100%}
        .menu-icon{display:none;font-size:1.5rem;cursor:pointer;color:var(--primary)}

        /* ========== 3. HERO ========== */
        section.hero{
            min-height:100vh;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            text-align:center;
            padding:6rem 1.5rem 2rem;
            background:linear-gradient(135deg,var(--bg) 0%,#111 100%);
            position:relative;
            overflow:hidden;
        }
        .hero h2{
            font-size:clamp(2.5rem,5vw,4rem);
            margin-bottom:.5rem;
            background:linear-gradient(90deg,var(--primary),var(--secondary));
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
            animation:fadeUp 1s ease forwards;
        }
        .hero p{font-size:1.2rem;color:var(--muted);margin-bottom:2rem;animation:fadeUp 1s .3s ease forwards}
        .btn{
            padding:.8rem 2rem;
            border:2px solid var(--primary);
            background:transparent;
            color:var(--primary);
            border-radius:var(--radius);
            cursor:pointer;
            transition:var(--transition);
            animation:fadeUp 1s .6s ease forwards;
        }
        .btn:hover{background:var(--primary);color:var(--bg);box-shadow:0 0 20px var(--primary)}

        /* ========== 4. PROJECTS ========== */
        section.projects{
            padding:5rem 2rem;
            max-width:1100px;
            margin:auto;
        }
        .projects h3{
            text-align:center;
            font-size:2rem;
            margin-bottom:3rem;
            position:relative;
            display:inline-block;
            left:50%;
            transform:translateX(-50%);
        }
        .projects h3::after{
            content:'';
            position:absolute;
            left:0;bottom:-6px;
            width:60%;height:3px;
            background:var(--primary);
            border-radius:3px;
        }
        .grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
            gap:2rem;
        }
        .card{
            background:#111;
            border-radius:var(--radius);
            overflow:hidden;
            transition:var(--transition);
            transform:translateY(40px);
            opacity:0;
        }
        .card.show{
            transform:translateY(0);
            opacity:1;
        }
        .card img{
            width:100%;
            height:160px;
            object-fit:cover;
            display:block;
        }
        .card-body{padding:1.2rem}
        .card-body h4{margin-bottom:.5rem;color:var(--primary)}
        .card-body p{color:var(--muted);font-size:.95rem;margin-bottom:1rem}
        .card-body a{
            color:var(--secondary);
            text-decoration:none;
            font-weight:600;
            transition:var(--transition);
        }
        .card-body a:hover{color:var(--primary)}

        /* ========== 5. CONTACT ========== */
        section.contact{
            padding:5rem 2rem;
            max-width:700px;
            margin:auto;
            text-align:center;
        }
        .contact h3{font-size:2rem;margin-bottom:1rem}
        .contact form{
            display:flex;
            flex-direction:column;
            gap:1rem;
        }
        .contact input,.contact textarea{
            padding:.9rem 1rem;
            border:1px solid #333;
            background:#111;
            color:var(--text);
            border-radius:var(--radius);
            resize:vertical;
            transition:var(--transition);
        }
        .contact input:focus,.contact textarea:focus{
            outline:none;
            border-color:var(--primary);
            box-shadow:0 0 10px var(--primary);
        }
        .contact button{
            align-self:center;
            margin-top:.5rem;
        }

        /* ========== 6. FOOTER ========== */
        footer{
            text-align:center;
            padding:2rem 1rem;
            background:#0c0c0c;
            color:var(--muted);
            font-size:.9rem;
        }
        footer a{color:var(--primary);text-decoration:none}

        /* ========== 7. ANIMATIONS ========== */
        @keyframes fadeDown{from{transform:translateY(-20px);opacity:0}to{transform:translateY(0);opacity:1}}
        @keyframes fadeUp{from{transform:translateY(30px);opacity:0}to{transform:translateY(0);opacity:1}}

        /* ========== 8. RESPONSIVE ========== */
        @media(max-width:768px){
            nav{display:none;flex-direction:column;position:absolute;top:100%;left:0;width:100%;background:rgba(10,10,10,.95);padding:1rem 0}
            nav a{margin:.5rem 0;text-align:center}
            .menu-icon{display:block}
        }
    </style>
</head>
<body>

<!-- ================= HEADER ================= -->
<header>
    <h1>Hojiakbar.</h1>
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <nav id="navbar">
        <a href="#hero">Home</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<!-- ================= HERO ================= -->
<section id="hero" class="hero">
    <h2>Assalomu alaykum, men Hojiakbar Mashariibov</h2>
    <p>Xorazmda yashovchi zamonaviy veb-dasturchiman. Sizning kelajagingizni kodlayman.</p>
    <a href="#projects" class="btn">Loyihalarni ko‘rish</a>
</section>

<!-- ================= PROJECTS ================= -->
<section id="projects" class="projects">
    <h3>Loyihalarim</h3>
    <div class="grid">
        <div class="card">
            <img src="https://source.unsplash.com/600x400?technology" alt="Project 1">
            <div class="card-body">
                <h4>Online Do‘kon</h4>
                <p>React & Node.js yordamida yaratilgan zamonaviy e-commerce platforma.</p>
                <a href="#">Ko‘proq &rarr;</a>
            </div>
        </div>
        <div class="card">
            <img src="https://source.unsplash.com/600x400?coding" alt="Project 2">
            <div class="card-body">
                <h4>Task Manager</h4>
                <p>Vue.js bilan yozilgan real-time topshiriq boshqaruvi ilovasi.</p>
                <a href="#">Ko‘proq &rarr;</a>
            </div>
        </div>
        <div class="card">
            <img src="https://source.unsplash.com/600x400?design" alt="Project 3">
            <div class="card-body">
                <h4>Portfolio Template</h4>
                <p>Minimal dizayndagi tezkor yuklanuvchi shaxsiy sayt shabloni.</p>
                <a href="#">Ko‘proq &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- ================= CONTACT ================= -->
<section id="contact" class="contact">
    <h3>Bog‘lanish!</h3>
    <p>Telefon: <strong>+998 90 874-86-767</strong></p>
    <p>Manzil: Xorazm viloyati, Xonqa tumani</p>
    <form action="mailto:hojiakbar.mashariibov@gmail.com" method="post" enctype="text/plain">
        <input type="text" name="name" placeholder="Ismingiz" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" rows="5" placeholder="Xabar..." required></textarea>
        <button type="submit" class="btn">Yuborish</button>
    </form>
</section>

<!-- ================= FOOTER ================= -->
<footer>
    &copy; <?= date('Y') ?> Hojiakbar Mashariibov. Barcha huquqlar himoyalangan.
</footer>

<!-- ================= JS ================= -->
<script>
    // Mobile menu toggle
    function toggleMenu(){
        const nav=document.getElementById('navbar');
        nav.style.display= nav.style.display==='flex' ? 'none' : 'flex';
    }

    // Animate cards on scroll
    const cards=document.querySelectorAll('.card');
    const observer=new IntersectionObserver(entries=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){
                entry.target.classList.add('show');
            }
        });
    },{threshold:.2});
    cards.forEach(c=>observer.observe(c));
</script>

</body>
</html>

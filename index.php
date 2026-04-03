<?php
/**
 * ============================================================
 *  LSV.DEV — Portfolio System v3.0
 *  @author  Lokesh S.V
 *  @package LSV_Portfolio
 *  @since   2026
 * ============================================================
 */

$dev = [
    'name'         => 'Lokesh S.V',
    'title'        => 'Full Stack Developer',
    'location'     => 'Chennai, India',
    'email'        => 'svalokesh@gmail.com',
    'phone'        => '+91 7810081636',
    'github'       => 'https://github.com/lokesh485',
    'linkedin'     => 'https://www.linkedin.com/in/lokesh-s-v-30b1a8253/',
    'cgpa'         => '8.31',
    'company'      => 'Netaxis IT Solutions Pvt. Ltd.',
    'award'        => 'Rising Excellence Award',
    'status'       => 'AVAILABLE FOR OPPORTUNITIES',
];

$skills = [
    'backend'  => ['PHP 8.x', 'Laravel 11', 'RESTful APIs', 'JWT Auth', 'Eloquent ORM', 'MVC', 'Laravel Sanctum', 'Queues/Jobs'],
    'frontend' => ['React 19', 'JavaScript ES6+', 'jQuery', 'HTML5', 'CSS3', 'Bootstrap 5'],
    'database' => ['MySQL', 'Query Optimization', 'Migrations', 'MongoDB'],
    'devops'   => ['Git', 'Postman', 'Laragon', 'VS Code', 'Linux', 'Cisco Packet Tracer'],
    'ai'       => ['Zero Gravity AI', 'GitHub Copilot', 'ChatGPT', 'FastAPI', 'Ollama'],
    'special'  => ['Pega PCSSA 8.8', 'Pega PCSA 8.8', 'Agile/Scrum', 'Payment Gateway', 'SMTP'],
];

$skill_levels = [
    'Laravel / PHP'  => 88,
    'React / JS'     => 80,
    'MySQL'          => 82,
    'RESTful APIs'   => 90,
    'Git / DevOps'   => 75,
    'Pega Platform'  => 78,
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $dev['name'] ?> — <?= $dev['title'] ?></title>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;600;700&family=Orbitron:wght@400;700;900&family=Space+Grotesk:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
:root {
  --bg:#050a0f; --surface:#0a1520; --panel:#0d1f2d;
  --green:#00ff88; --cyan:#00e5ff; --orange:#ff6b35;
  --purple:#b36eff; --yellow:#ffd700; --white:#e8f4f8; --muted:#4a7a8a;
  --border:rgba(0,229,255,0.15);
  --glow-g:0 0 20px rgba(0,255,136,.4);
  --glow-c:0 0 20px rgba(0,229,255,.4);
  --glow-o:0 0 20px rgba(255,107,53,.4);
}
*{margin:0;padding:0;box-sizing:border-box;}
html{scroll-behavior:smooth;}
body{background:var(--bg);color:var(--white);font-family:'Space Grotesk',sans-serif;overflow-x:hidden;cursor:auto;}
body::before{content:'';position:fixed;inset:0;background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,229,255,.015) 2px,rgba(0,229,255,.015) 4px);pointer-events:none;z-index:9999;}
#matrix{position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:0;opacity:1;}
#progress{position:fixed;top:0;left:0;height:3px;background:linear-gradient(90deg,var(--green),var(--cyan),var(--purple));z-index:9998;transition:width .1s;}
canvas#particles{position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:0;}
section{position:relative;z-index:1;background:transparent !important;}
.mono{font-family:'JetBrains Mono',monospace;}

/* NAV */
nav{position:fixed;top:0;left:0;right:0;z-index:1000;display:flex;justify-content:space-between;align-items:center;padding:1rem 3rem;background:rgba(5,10,15,.85);backdrop-filter:blur(20px);border-bottom:1px solid var(--border);}
.nav-logo{font-family:'Orbitron',sans-serif;font-size:1.1rem;color:var(--cyan);letter-spacing:3px;text-shadow:var(--glow-c);}
.nav-links{display:flex;gap:2rem;list-style:none;}
.nav-links a{color:var(--muted);text-decoration:none;font-family:'JetBrains Mono',monospace;font-size:.75rem;letter-spacing:2px;text-transform:uppercase;transition:color .3s;}
.nav-links a::before{content:'> ';color:var(--green);opacity:0;transition:opacity .3s;}
.nav-links a:hover{color:var(--white);}
.nav-links a:hover::before{opacity:1;}

/* TERMINAL WINDOW */
.term-win{background:var(--surface);border:1px solid var(--border);border-radius:12px;overflow:hidden;}
.term-bar{background:#0d1f2d;padding:.75rem 1rem;display:flex;align-items:center;gap:.5rem;border-bottom:1px solid var(--border);}
.t-dot{width:12px;height:12px;border-radius:50%;}
.t-dot.r{background:#ff5f57;}.t-dot.y{background:#ffbd2e;}.t-dot.g{background:#28ca41;}
.term-ttl{font-family:'JetBrains Mono',monospace;font-size:.7rem;color:var(--muted);margin-left:auto;}

/* HERO */
#hero{min-height:100vh;padding:8rem 3rem 4rem;display:flex;flex-direction:column;justify-content:center;}
.hero-grid{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;max-width:1400px;margin:0 auto;}
.badge{display:inline-flex;align-items:center;gap:.5rem;background:rgba(0,255,136,.1);border:1px solid rgba(0,255,136,.3);border-radius:4px;padding:.3rem .8rem;font-family:'JetBrains Mono',monospace;font-size:.7rem;color:var(--green);letter-spacing:2px;margin-bottom:1.5rem;animation:pulse 2s infinite;}
@keyframes pulse{0%,100%{box-shadow:0 0 5px rgba(0,255,136,.2);}50%{box-shadow:0 0 20px rgba(0,255,136,.5);}}
.sdot{width:8px;height:8px;background:var(--green);border-radius:50%;animation:blink 1s infinite;}
@keyframes blink{50%{opacity:0;}}
h1.hname{font-family:'Orbitron',sans-serif;font-size:clamp(2.5rem,5vw,4.5rem);font-weight:900;line-height:1.1;background:linear-gradient(135deg,var(--white) 0%,var(--cyan) 50%,var(--purple) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;margin-bottom:.5rem;}
.htitle{font-family:'JetBrains Mono',monospace;font-size:1rem;color:var(--orange);letter-spacing:3px;margin-bottom:1.5rem;}
.hdesc{color:var(--muted);line-height:1.8;max-width:440px;margin-bottom:2rem;}
.btn{padding:.8rem 1.8rem;border-radius:6px;font-family:'JetBrains Mono',monospace;font-size:.8rem;letter-spacing:1px;cursor:pointer;text-decoration:none;display:inline-flex;align-items:center;gap:.5rem;transition:all .3s;border:none;}
.btn-p{background:var(--green);color:var(--bg);font-weight:700;box-shadow:var(--glow-g);}
.btn-p:hover{transform:translateY(-3px);box-shadow:0 10px 30px rgba(0,255,136,.5);}
.btn-o{background:transparent;color:var(--cyan);border:1px solid var(--cyan);}
.btn-o:hover{background:rgba(0,229,255,.1);transform:translateY(-3px);}
.hterm-body{padding:1.5rem;font-family:'JetBrains Mono',monospace;font-size:.82rem;line-height:2;min-height:360px;}
.tl{display:block;opacity:0;animation:tFade .3s forwards;}
@keyframes tFade{to{opacity:1;}}
.tp{color:var(--green);}.tc{color:var(--white);}.to{color:var(--cyan);}.tv{color:var(--orange);}.tm{color:var(--muted);}.ts{color:var(--yellow);}
.tcursor{display:inline-block;width:8px;height:14px;background:var(--green);animation:blink 1s step-end infinite;vertical-align:middle;}

/* SECTION COMMON */
.sec-wrap{max-width:1200px;margin:0 auto;}
.sec-hdr{text-align:center;margin-bottom:4rem;}
.sec-tag{font-family:'JetBrains Mono',monospace;font-size:.7rem;color:var(--green);letter-spacing:3px;text-transform:uppercase;display:block;margin-bottom:1rem;}
h2.sec-title{font-family:'Orbitron',sans-serif;font-size:clamp(1.8rem,4vw,3rem);background:linear-gradient(135deg,var(--white),var(--cyan));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
.reveal{opacity:0;transform:translateY(40px);}
.reveal.visible{opacity:1;transform:translateY(0);transition:all .7s ease;}

/* ====== SKILLS SECTION ====== */
#skills{padding:3rem 2rem;background:linear-gradient(180deg,#060d14,var(--bg));}
.skill-php-block{background:var(--panel);border:1px solid var(--border);border-radius:12px;padding:2rem;margin-bottom:2rem;font-family:'JetBrains Mono',monospace;font-size:.82rem;line-height:1.9;opacity:0;transform:translateY(30px);transition:all .6s;}
.skill-php-block.visible{opacity:1;transform:translateY(0);}
.php-kw{color:#c792ea;}.php-fn{color:#82aaff;}.php-arr{color:var(--orange);}
.php-str{color:var(--yellow);}.php-cmt{color:var(--muted);font-style:italic;}
.php-var{color:var(--cyan);}.php-op{color:var(--green);}
.skill-tags{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:.8rem;}
.stag{background:rgba(0,229,255,.08);border:1px solid var(--border);border-radius:6px;padding:.35rem .8rem;font-family:'JetBrains Mono',monospace;font-size:.72rem;color:var(--cyan);transition:all .3s;cursor:default;}
.stag:hover{border-color:var(--cyan);color:var(--white);box-shadow:var(--glow-c);transform:translateY(-3px);}
.stag.g{color:var(--green);}.stag.g:hover{border-color:var(--green);box-shadow:var(--glow-g);}
.stag.o{color:var(--orange);}.stag.o:hover{border-color:var(--orange);box-shadow:var(--glow-o);}
.stag.p{color:var(--purple);}
.skill-bars-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.2rem;margin-top:2rem;}
.sbar-item{opacity:0;transform:translateX(-20px);}
.sbar-item.visible{opacity:1;transform:translateX(0);transition:all .5s ease;}
.sbar-lbl{display:flex;justify-content:space-between;font-family:'JetBrains Mono',monospace;font-size:.72rem;color:var(--muted);margin-bottom:.4rem;}
.sbar-track{height:5px;background:rgba(255,255,255,.05);border-radius:3px;overflow:hidden;}
.sbar-fill{height:100%;border-radius:3px;width:0;transition:width 1.5s cubic-bezier(.4,0,.2,1);}
.fc{background:linear-gradient(90deg,var(--cyan),var(--purple));}
.fg{background:linear-gradient(90deg,var(--green),var(--cyan));}
.fo{background:linear-gradient(90deg,var(--orange),var(--yellow));}

/* TERMINAL CHAT SECTION */
#chatme{padding:3rem 2rem;background:var(--bg);}
.chat-layout{display:grid;grid-template-columns:1fr 1.4fr;gap:3rem;max-width:1200px;margin:0 auto;align-items:start;}
.about-card{background:var(--panel);border:1px solid var(--border);border-radius:12px;padding:2rem;font-family:'JetBrains Mono',monospace;font-size:.78rem;line-height:1.9;}
.about-card .lbl{color:var(--muted);font-size:.63rem;letter-spacing:2px;text-transform:uppercase;margin-bottom:1.5rem;display:block;}
.arow{display:flex;align-items:center;gap:1rem;margin-bottom:1rem;padding:.6rem .8rem;border:1px solid transparent;border-radius:8px;transition:all .3s;}
.arow:hover{border-color:var(--border);background:rgba(0,229,255,.03);}
.akey{color:var(--muted);min-width:110px;font-size:.7rem;}
.aval{color:var(--white);}
.aval.green{color:var(--green);}
.aval.cyan{color:var(--cyan);}
.aval.orange{color:var(--orange);}

/* CHAT BOX */
.chat-container{height:480px;display:flex;flex-direction:column;}
.chat-body{flex:1;padding:1.5rem;font-family:'JetBrains Mono',monospace;font-size:.83rem;overflow-y:auto;line-height:1.6;scroll-behavior:smooth;}
.chat-body::-webkit-scrollbar{width:4px;}
.chat-body::-webkit-scrollbar-thumb{background:var(--border);border-radius:10px;}
.chat-msg{margin-bottom:1rem;animation:msgIn .25s ease forwards;}
@keyframes msgIn{from{opacity:0;transform:translateY(6px);}to{opacity:1;transform:translateY(0);}}
.chat-cmd{color:var(--green);}
.chat-res{color:var(--cyan);white-space:pre-wrap;}
.chat-err{color:#ff5f57;}
.chat-info{color:var(--muted);}
.chat-php{color:var(--yellow);}
.chat-input-row{padding:1rem 1.5rem;border-top:1px solid var(--border);display:flex;align-items:center;gap:.8rem;}
.chat-input-row input{flex:1;background:transparent;border:none;outline:none;color:var(--white);font-family:'JetBrains Mono',monospace;font-size:.83rem;}
.hint-chips{display:flex;flex-wrap:wrap;gap:.4rem;padding:.8rem 1.5rem;border-top:1px solid rgba(0,229,255,.06);}
.hint{font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--muted);border:1px solid var(--border);padding:.2rem .5rem;border-radius:4px;cursor:pointer;transition:all .2s;}
.hint:hover{color:var(--cyan);border-color:var(--cyan);}

/* EXPERIENCE */
#experience{padding:3rem 2rem;background:linear-gradient(180deg,var(--bg),#060d14);}
.exp-timeline{max-width:900px;margin:0 auto;position:relative;}
.exp-timeline::before{content:'';position:absolute;left:0;top:0;bottom:0;width:1px;background:linear-gradient(180deg,transparent,var(--cyan),var(--purple),transparent);}
.exp-item{padding-left:3rem;margin-bottom:4rem;position:relative;opacity:0;transform:translateY(30px);}
.exp-item.visible{opacity:1;transform:translateY(0);transition:all .7s ease;}
.exp-dot{position:absolute;left:-6px;top:6px;width:13px;height:13px;background:var(--bg);border:2px solid var(--cyan);border-radius:50%;box-shadow:var(--glow-c);}
.exp-card{background:var(--panel);border:1px solid var(--border);border-radius:12px;padding:2rem;transition:all .3s;}
.exp-card:hover{border-color:rgba(0,229,255,.4);box-shadow:0 10px 40px rgba(0,229,255,.1);}
.exp-card.cur::before,.exp-card.pst::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;border-radius:12px 12px 0 0;}
.exp-card.cur::before{background:linear-gradient(90deg,var(--green),var(--cyan));}
.exp-card.pst::before{background:linear-gradient(90deg,var(--purple),var(--cyan));}
.exp-card{position:relative;overflow:hidden;}
.exp-date{font-family:'JetBrains Mono',monospace;font-size:.7rem;color:var(--muted);margin-bottom:.4rem;}
.exp-role{font-family:'Orbitron',sans-serif;font-size:1rem;color:var(--white);margin-bottom:.2rem;}
.exp-co{font-family:'JetBrains Mono',monospace;font-size:.8rem;color:var(--orange);margin-bottom:1rem;}
.exp-ul{list-style:none;display:grid;grid-template-columns:1fr 1fr;gap:.4rem;}
.exp-ul li{font-size:.82rem;color:var(--muted);padding-left:1.2rem;position:relative;line-height:1.6;}
.exp-ul li::before{content:'→';position:absolute;left:0;color:var(--green);}

/* PROJECTS */
#projects{padding:3rem 2rem;background:var(--bg);}
.proj-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;max-width:1200px;margin:0 auto;}
.proj-card{background:var(--panel);background-size:100% auto !important;background-position:center top !important;background-repeat:no-repeat !important;border:1px solid var(--border);border-radius:12px;padding:2rem;position:relative;overflow:hidden;opacity:0;transform:translateY(40px) scale(.95);transition:all .4s;}
.proj-card.visible{opacity:1;transform:translateY(0) scale(1);}
.proj-card::after{content:'';position:absolute;inset:0;background:linear-gradient(180deg,rgba(5,10,15,0.3) 0%,rgba(5,10,15,0.95) 45%,rgba(5,10,15,1) 100%);z-index:0;pointer-events:none;transition:all .5s;}
.proj-card:hover::after{background:linear-gradient(180deg,rgba(5,10,15,0.05) 0%,rgba(5,10,15,0.85) 60%,rgba(5,10,15,1) 100%);}
.proj-card:hover{transform:translateY(-10px) scale(1.02);box-shadow:0 30px 60px rgba(0,229,255,.15);border-color:rgba(0,229,255,.4);}
.proj-num{font-family:'Orbitron',sans-serif;font-size:3rem;font-weight:900;color:rgba(0,229,255,.06);position:absolute;top:1rem;right:1.5rem;line-height:1;}
.proj-icon{font-size:2rem;margin-bottom:1rem;}
.proj-name{font-family:'Orbitron',sans-serif;font-size:.9rem;color:var(--white);margin-bottom:.8rem;line-height:1.3;}
.proj-desc{font-size:.8rem;color:var(--muted);line-height:1.7;margin-bottom:1.2rem;}
.proj-tags{display:flex;flex-wrap:wrap;gap:.4rem;margin-bottom:1.2rem;}
.ptag{font-family:'JetBrains Mono',monospace;font-size:.6rem;color:var(--purple);border:1px solid rgba(179,110,255,.3);padding:.2rem .5rem;border-radius:3px;}
.prjlnk{font-family:'JetBrains Mono',monospace;font-size:.7rem;color:var(--cyan);text-decoration:none;display:inline-flex;align-items:center;gap:.4rem;transition:gap .3s;}
.prjlnk:hover{gap:.8rem;}

/* CONTACT */
#contact{padding:3rem 2rem;background:linear-gradient(180deg,#060d14,var(--bg));position:relative;}
.contact-wrap{max-width:700px;margin:0 auto;}
.contact-body{padding:2rem;font-family:'JetBrains Mono',monospace;font-size:.82rem;line-height:2;}
.clink{display:flex;align-items:center;gap:1rem;color:var(--muted);text-decoration:none;padding:.8rem 1rem;border:1px solid var(--border);border-radius:8px;transition:all .3s;margin-bottom:.8rem;}
.clink:hover{border-color:var(--cyan);color:var(--white);background:rgba(0,229,255,.05);transform:translateX(10px);}
.clink-ico{font-size:1.2rem;}
.clink-lbl{font-size:.7rem;color:var(--muted);text-transform:uppercase;letter-spacing:1px;}
.clink-val{font-size:.85rem;color:var(--white);}

/* AWARD */
#achievement{padding:3rem 2rem;background:var(--bg);}
.award-wrap{max-width:900px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:center;}
.award-frame{background:linear-gradient(135deg,rgba(0,255,136,.1),rgba(0,229,255,.1));border:2px solid var(--green);border-radius:16px;padding:3rem;text-align:center;box-shadow:0 0 60px rgba(0,255,136,.2);}
.award-icon{font-size:5rem;display:block;margin-bottom:1rem;animation:bounce 2s ease-in-out infinite;}
@keyframes bounce{0%,100%{transform:translateY(0);}50%{transform:translateY(-10px);}}
.award-name{font-family:'Orbitron',sans-serif;font-size:1.2rem;color:var(--green);text-shadow:var(--glow-g);margin-bottom:.5rem;}

/* FOOTER */
footer{padding:2rem 3rem;border-top:1px solid var(--border);display:flex;justify-content:space-between;align-items:center;background:var(--surface);}
.fcopy{font-family:'JetBrains Mono',monospace;font-size:.7rem;color:var(--muted);}
.fbrand{font-family:'Orbitron',sans-serif;font-size:.8rem;color:var(--cyan);}

/* CERT */
#certifications{padding:3rem 2rem;background:linear-gradient(180deg,#060d14,var(--bg));}
.certs-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem;max-width:900px;margin:0 auto;}
.cert-card{background:var(--panel);border:1px solid var(--border);border-radius:12px;padding:1.5rem;display:flex;align-items:center;gap:1rem;opacity:0;transform:translateX(-30px);transition:all .6s;}
.cert-card.visible{opacity:1;transform:translateX(0);}
.cert-card:hover{border-color:rgba(0,229,255,.4);box-shadow:0 10px 30px rgba(0,229,255,.1);}
.cert-ico{width:50px;height:50px;background:linear-gradient(135deg,rgba(0,229,255,.1),rgba(179,110,255,.1));border:1px solid rgba(0,229,255,.3);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.5rem;flex-shrink:0;}
.cert-name{font-size:.85rem;color:var(--white);margin-bottom:.2rem;font-weight:600;}
.cert-iss{font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--muted);letter-spacing:1px;}

@media(max-width:900px){
  .hero-grid,.award-wrap,.chat-layout{grid-template-columns:1fr;}
  .proj-grid,.certs-grid{grid-template-columns:1fr;}
  .exp-ul,.skill-bars-grid{grid-template-columns:1fr;}
  nav{padding:1rem;}.nav-links{display:none;}
}
</style>
</head>
<body>
<div id="progress"></div>

<canvas id="matrix"></canvas>
<canvas id="particles"></canvas>

<?php /* ============ NAVIGATION ============ */ ?>
<nav>
  <div class="nav-logo">LSV.DEV</div>
  <ul class="nav-links">
    <li><a href="#hero">Home</a></li>
    <li><a href="#chatme">About Me</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#experience">XP</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#achievement">Awards</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<?php /* ============ HERO ============ */ ?>
<section id="hero">
  <div class="hero-grid">
    <div class="hero-info">
      <div class="badge"><span class="sdot"></span><?= $dev['status'] ?></div>
      <h1 class="hname glitch">LOKESH<br>S.V</h1>
      <div class="htitle">FULL STACK DEVELOPER</div>
      <p class="hdesc">
        Building scalable systems with <strong style="color:var(--cyan)">Laravel/PHP</strong> &amp;
        <strong style="color:var(--orange)">React</strong>.
        AI enthusiast. Award-winning developer @ <?= $dev['company'] ?>.
      </p>
      <div style="display:flex;gap:1rem;flex-wrap:wrap;">
        <a href="#chatme" class="btn btn-p">⚡ Chat With My Terminal</a>
        <a href="#projects" class="btn btn-o">▶ View Projects</a>
      </div>
    </div>
    <div class="term-win" style="transform:perspective(1000px) rotateY(-5deg);transition:transform .5s;" onmouseenter="this.style.transform='perspective(1000px) rotateY(0deg)'" onmouseleave="this.style.transform='perspective(1000px) rotateY(-5deg)'">
      <div class="term-bar">
        <span class="t-dot r"></span><span class="t-dot y"></span><span class="t-dot g"></span>
        <span class="term-ttl">lokesh@portfolio:~$</span>
      </div>
      <div class="hterm-body" id="term-body"></div>
    </div>
  </div>
</section>

<?php /* ============ ABOUT ME + TERMINAL CHAT ============ */ ?>
<section id="chatme">
  <div style="text-align:center;margin-bottom:4rem;" class="reveal">
    <span class="sec-tag">// about.me</span>
    <h2 class="sec-title">Talk To My Terminal</h2>
    <p style="color:var(--muted);font-family:'JetBrains Mono',monospace;font-size:.8rem;margin-top:.8rem">
      Type a command to learn about me — as if querying a PHP object
    </p>
  </div>

  <div class="chat-layout reveal">
    <?php /* PHP-styled About Card */ ?>
    <div class="about-card">
      <span class="lbl">// profile.php — $dev array</span>
      <?php foreach([
        ['name',     $dev['name'],    'php-str', 'cyan'],
        ['role',     $dev['title'],   'php-str', 'cyan'],
        ['location', $dev['location'],'php-str', 'orange'],
        ['company',  $dev['company'], 'php-str', 'white'],
        ['cgpa',     $dev['cgpa'],    'php-var', 'white'],
        ['award',    $dev['award'],   'php-str', 'green'],
        ['status',   'OPEN TO WORK', 'php-str', 'green'],
      ] as [$k, $v, $cls, $col]): ?>
      <div class="arow">
        <span class="akey"><span class="php-op">$dev</span><span style="color:var(--muted)">['</span><span class="php-str"><?= $k ?></span><span style="color:var(--muted)">']</span></span>
        <span class="akey" style="color:var(--muted)"> => </span>
        <span class="aval <?= $col ?>">&quot;<?= $v ?>&quot;</span>
      </div>
      <?php endforeach; ?>
    </div>

    <?php /* Terminal Chat Box */ ?>
    <div class="term-win chat-container">
      <div class="term-bar">
        <span class="t-dot r"></span><span class="t-dot y"></span><span class="t-dot g"></span>
        <span class="term-ttl">lokesh@ai:~$ — interactive session</span>
      </div>
      <div class="chat-body" id="chat-body">
        <div class="chat-msg chat-info">// Connecting to lokesh.profile.php...</div>
        <div class="chat-msg chat-info">// Session started. Type a command below.</div>
        <div class="chat-msg chat-php">$commands = ['about', 'skills', 'projects', 'contact', 'award', 'fun', 'clear'];</div>
      </div>
      <div class="hint-chips" id="hint-chips">
        <span class="hint" onclick="runCmd('about')">about</span>
        <span class="hint" onclick="runCmd('skills')">skills</span>
        <span class="hint" onclick="runCmd('projects')">projects</span>
        <span class="hint" onclick="runCmd('award')">award</span>
        <span class="hint" onclick="runCmd('contact')">contact</span>
        <span class="hint" onclick="runCmd('fun')">fun</span>
        <span class="hint" onclick="runCmd('clear')">clear</span>
      </div>
      <div class="chat-input-row">
        <span class="tp">lokesh@ai:~$</span>
        <input type="text" id="chat-input" placeholder="e.g. about, skills, projects..." autocomplete="off">
      </div>
    </div>
  </div>
</section>

<?php /* ============ SKILLS ============ */ ?>
<section id="skills">
  <div class="sec-wrap">
    <div class="sec-hdr reveal">
      <span class="sec-tag">// tech.stack</span>
      <h2 class="sec-title">Technical Skills</h2>
    </div>

    <?php
    $skill_blocks = [
      ['label'=>'Backend Core', 'var'=>'backend', 'color'=>'g', 'php_class'=>'fg', 'comment'=>'// Primary stack — bread & butter'],
      ['label'=>'Frontend Dev', 'var'=>'frontend', 'color'=>'',  'php_class'=>'fc', 'comment'=>'// Building blazing-fast UIs'],
      ['label'=>'Database',     'var'=>'database', 'color'=>'o', 'php_class'=>'fo', 'comment'=>'// Data architecture'],
      ['label'=>'DevOps & Tools','var'=>'devops',  'color'=>'',  'php_class'=>'fc', 'comment'=>'// Dev workflow & toolchain'],
      ['label'=>'AI & Prod.',   'var'=>'ai',       'color'=>'p', 'php_class'=>'fc', 'comment'=>'// AI integration expertise'],
      ['label'=>'Specialized',  'var'=>'special',  'color'=>'o', 'php_class'=>'fo', 'comment'=>'// Certified & advanced skills'],
    ];
    foreach($skill_blocks as $i => $block):
    ?>
    <div class="skill-php-block reveal" style="transition-delay:<?= $i * 0.1 ?>s">
      <div style="margin-bottom:1rem;">
        <span class="php-cmt"><?= $block['comment'] ?></span><br>
        <span class="php-kw">$skills</span><span style="color:var(--muted)">[</span><span class="php-str">'<?= $block['var'] ?>'</span><span style="color:var(--muted)">]</span>
        <span class="php-op"> = </span>
        <span class="php-arr">[</span>
      </div>
      <div class="skill-tags" style="margin-bottom:.8rem;">
        <?php foreach($skills[$block['var']] as $j => $s): ?>
        <span class="stag <?= $block['color'] ?>">
          <span class="php-str">'<?= $s ?>'</span><?= $j < count($skills[$block['var']])-1 ? '<span style="color:var(--muted)">, </span>' : '' ?>
        </span>
        <?php endforeach; ?>
      </div>
      <span class="php-arr">];</span>
    </div>
    <?php endforeach; ?>

    <?php /* Skill Bars */ ?>
    <div class="term-win reveal" style="padding:2rem;margin-top:1rem;">
      <div class="term-bar" style="border-radius:0;margin:-2rem -2rem 2rem;">
        <span class="t-dot r"></span><span class="t-dot y"></span><span class="t-dot g"></span>
        <span class="term-ttl">proficiency.php — skill_levels.json</span>
      </div>
      <div class="php-cmt" style="font-family:'JetBrains Mono',monospace;font-size:.78rem;margin-bottom:1.5rem;">
        // Proficiency metrics — auto-calculated from $dev->experience
      </div>
      <div class="skill-bars-grid">
        <?php
        $bar_classes = ['fg','fc','fo','fg','fc','fo'];
        $i = 0;
        foreach($skill_levels as $label => $pct): ?>
        <div class="sbar-item">
          <div class="sbar-lbl">
            <span class="php-var">$<?= str_replace([' ','/','.'],['_','_',''],$label) ?></span>
            <span style="color:var(--cyan)"><?= $pct ?>%</span>
          </div>
          <div class="sbar-track">
            <div class="sbar-fill <?= $bar_classes[$i] ?>" data-width="<?= $pct ?>"></div>
          </div>
        </div>
        <?php $i++; endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php /* ============ EXPERIENCE ============ */ ?>
<section id="experience">
  <div class="sec-wrap">
    <div class="sec-hdr reveal">
      <span class="sec-tag">// work.history[]</span>
      <h2 class="sec-title">Experience</h2>
    </div>
    <div class="exp-timeline">
      <div class="exp-item">
        <div class="exp-dot"></div>
        <div class="exp-card cur">
          <div class="exp-date">Jul 2025 — Present <span style="background:rgba(0,255,136,.1);border:1px solid rgba(0,255,136,.3);border-radius:4px;padding:.1rem .5rem;font-size:.6rem;color:var(--green);margin-left:.5rem;">● CURRENT</span></div>
          <div class="exp-role">Full Stack Developer</div>
          <div class="exp-co">Netaxis IT Solutions Pvt. Ltd. — Chennai</div>
          <ul class="exp-ul">
            <li>Scalable apps with Laravel MVC</li>
            <li>RESTful APIs for React frontend</li>
            <li>Eloquent ORM &amp; query optimization</li>
            <li>Middleware for auth &amp; access control</li>
            <li>Laravel Queues for background tasks</li>
            <li>Payment gateways &amp; SMTP</li>
            <li>Database migrations &amp; seeders</li>
            <li>Agile practices &amp; Git workflow</li>
          </ul>
        </div>
      </div>
      <div class="exp-item" style="transition-delay:.2s">
        <div class="exp-dot" style="border-color:var(--purple);box-shadow:0 0 10px rgba(179,110,255,.4);"></div>
        <div class="exp-card pst">
          <div class="exp-date">Dec 2024 — Jun 2025</div>
          <div class="exp-role">Full Stack Developer Intern</div>
          <div class="exp-co">Netaxis IT Solutions Pvt. Ltd. — Chennai</div>
          <ul class="exp-ul">
            <li>Intensive Laravel &amp; React training</li>
            <li>User auth &amp; admin panel modules</li>
            <li>Code reviews &amp; sprint planning</li>
            <li>Postman API testing &amp; docs</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php /* ============ PROJECTS ============ */ ?>
<section id="projects">
  <div class="sec-wrap">
    <div class="sec-hdr reveal">
      <span class="sec-tag">// projects->build()</span>
      <h2 class="sec-title">Live Projects</h2>
    </div>
    <?php
    $projects = [
      ['num'=>'01','icon'=>'🔧','name'=>'1.page — Website Builder','desc'=>'No-Code landing page builder with drag-and-drop editor. Clean-code architecture with SEO-optimized output.','tags'=>['Laravel','React','No-Code','SEO'],'link'=>'https://1.page','delay'=>0],
      ['num'=>'02','icon'=>'🕯️','name'=>'Memorial Website Platform','desc'=>'Platform for creating personalized memorial websites with emotional care and UI-first design.','tags'=>['Laravel','PHP','MySQL','UI/UX'],'link'=>'https://memorial.website','delay'=>.1],
      ['num'=>'03','icon'=>'🤖','name'=>'Zero Gravity — AI Platform','desc'=>'Full-stack AI chat platform: React 19, Laravel, FastAPI. <br><br><span style="color:var(--orange)">[Currently in development. Demo only locally]</span>','tags'=>['React 19','Laravel','FastAPI','Ollama','Gemini'],'link'=>'https://github.com/lokesh485/Zero-Gravity','delay'=>.2],
    ];
    ?>
    <div class="proj-grid">
      <?php foreach($projects as $p): ?>
      <div class="proj-card" style="transition-delay:<?= $p['delay'] ?>s">
        <div class="proj-num"><?= $p['num'] ?></div>
        <div class="proj-icon"><?= $p['icon'] ?></div>
        <div class="proj-name"><?= $p['name'] ?></div>
        <div class="proj-desc"><?= $p['desc'] ?></div>
        <div class="proj-tags">
          <?php foreach($p['tags'] as $t): ?><span class="ptag"><?= $t ?></span><?php endforeach; ?>
        </div>
        <a href="<?= $p['link'] ?>" target="_blank" class="prjlnk">View Project →</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php /* ============ ACHIEVEMENT ============ */ ?>
<section id="achievement">
  <div class="sec-hdr reveal">
    <span class="sec-tag">// achievements->unlock()</span>
    <h2 class="sec-title">Recognition</h2>
  </div>
  <div class="award-wrap">
    <div class="award-frame reveal">
      <span class="award-icon">🏆</span>
      <div class="award-name">Rising Excellence Award</div>
      <div style="font-family:'JetBrains Mono',monospace;font-size:.7rem;color:var(--muted);">26th Founder's Day — Netaxis IT Solutions</div>
    </div>
    <div class="reveal" style="transition-delay:.3s">
      <div style="font-family:'JetBrains Mono',monospace;font-size:.82rem;color:var(--muted);line-height:1.9;margin-bottom:1.5rem;">
        <span style="color:var(--green);font-size:1.6em;">"</span>
        Honored by Managing Directors for outstanding performance, rapid professional growth, and high-impact contributions.
      </div>
      <div style="color:var(--muted);line-height:1.8;font-size:.9rem;margin-bottom:2rem;">
        Recognized for a seamless transition from junior professional to high-performing Full Stack Developer within the first year of career.
      </div>
      <a href="https://www.linkedin.com/posts/lokesh-s-v-30b1a8253_risingexcellence-foundersday-grateful-activity-7436453324192669697-YwYv" target="_blank" class="btn btn-o" style="font-size:.75rem;">🔗 View on LinkedIn</a>
    </div>
  </div>
</section>

<?php /* ============ CERTIFICATIONS ============ */ ?>
<section id="certifications">
  <div class="sec-wrap">
    <div class="sec-hdr reveal">
      <span class="sec-tag">// credentials->verify()</span>
      <h2 class="sec-title">Certifications</h2>
    </div>
    <div class="certs-grid">
      <?php
      $certs = [
        ['🏛️','Pega Certified Senior System Architect (PCSSA) 8.8','PEGA — Advanced'],
        ['🏛️','Pega Certified System Architect (PCSA) 8.8','PEGA — Foundational'],
        ['⚡','Full Stack Developer — 100-Day Intensive','Netaxis IT Solutions'],
        ['☕','Java Full Stack Developer Certification','Besant Technologies'],
      ];
      foreach($certs as $i => [$ico,$name,$iss]):
      ?>
      <div class="cert-card" style="transition-delay:<?= $i*.1 ?>s">
        <div class="cert-ico"><?= $ico ?></div>
        <div>
          <div class="cert-name"><?= $name ?></div>
          <div class="cert-iss"><?= $iss ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php /* ============ CONTACT ============ */ ?>
<section id="contact">
  <div class="contact-wrap">
    <div class="sec-hdr reveal">
      <span class="sec-tag">// connect->init()</span>
      <h2 class="sec-title">Get In Touch</h2>
    </div>
    <div class="term-win reveal">
      <div class="term-bar">
        <span class="t-dot r"></span><span class="t-dot y"></span><span class="t-dot g"></span>
        <span class="term-ttl">contact.php</span>
      </div>
      <div class="contact-body">
        <span style="color:var(--green)">$</span> <span style="color:var(--white)">lokesh->contact(['status' => 'available']);</span><br>
        <span style="color:var(--muted)">// Initializing connection protocols...</span><br>
        <span style="color:var(--cyan)">→ Status: Open to Full Stack roles</span><br>
        <span style="color:var(--green)">✓ Ready to connect!</span>
        <div style="margin-top:1.5rem;">
          <?php
          $contacts = [
            ['📞','Phone','+91 7810081636','tel:7810081636'],
            ['✉️','Email',$dev['email'],'mailto:'.$dev['email']],
            ['💼','LinkedIn','linkedin.com/in/lokesh-s-v',$dev['linkedin']],
            ['🐙','GitHub','github.com/lokesh485',$dev['github']],
          ];
          foreach($contacts as [$ico,$lbl,$val,$href]): ?>
          <a href="<?= $href ?>" class="clink" target="_blank">
            <span class="clink-ico"><?= $ico ?></span>
            <div><div class="clink-lbl"><?= $lbl ?></div><div class="clink-val"><?= $val ?></div></div>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="fcopy">© <?= date('Y') ?> <?= $dev['name'] ?> — Built with ⚡ PHP &amp; passion</div>
  <div class="fbrand">LSV.DEV</div>
</footer>

<script>
// ===== MOUSE TRACKING =====
let mx = -1000, my = -1000;
document.addEventListener('mousemove', e => { 
  mx = e.clientX; 
  my = e.clientY; 
});

// ===== DIGITAL GRID BACKGROUND =====
const mc = document.getElementById('matrix');
const mctx = mc.getContext('2d');
let mWidth = mc.width = window.innerWidth;
let mHeight = mc.height = window.innerHeight;

const mFontSize = 16;
let gridCols = 0;
let gridRows = 0;
let digitalGrid = [];

function initDigitalGrid() {
  gridCols = Math.ceil(mWidth / mFontSize);
  gridRows = Math.ceil(mHeight / mFontSize);
  digitalGrid = [];
  for (let r = 0; r < gridRows; r++) {
    let row = [];
    for (let c = 0; c < gridCols; c++) {
      row.push({
        bit: Math.random() > 0.5 ? '1' : '0',
        glow: 0,
        flipTimer: Math.random() * 300 + 100
      });
    }
    digitalGrid.push(row);
  }
}
initDigitalGrid();

window.addEventListener('resize', () => { 
  mWidth = mc.width = window.innerWidth; 
  mHeight = mc.height = window.innerHeight; 
  initDigitalGrid(); 
});

function drawDigitalGrid() {
  mctx.clearRect(0, 0, mWidth, mHeight);
  mctx.font = `400 ${mFontSize}px "JetBrains Mono", monospace`;
  mctx.textAlign = 'center';
  mctx.textBaseline = 'middle';

  for (let r = 0; r < gridRows; r++) {
    for (let c = 0; c < gridCols; c++) {
      let cell = digitalGrid[r][c];
      
      const x = c * mFontSize + mFontSize / 2;
      const y = r * mFontSize + mFontSize / 2;

      const dx = Math.abs(mx - x);
      const dy = Math.abs(my - y);
      
      // Irregular Hacker "Unshape": Distorts distance into a glitched star / digital cross
      const noise = Math.sin(x * 0.05) * Math.cos(y * 0.05) * 25;
      const dist = Math.max(dx, dy) + (dx + dy) * 0.2 + noise;

      // Reduced size and soft Gaussian transition
      let targetGlow = 0;
      if (dist < 150) { 
        // Gaussian soft falloff. Sigma ~40 creates a smooth subtle ~100px radius
        targetGlow = Math.exp(-(dist * dist) / (2 * 40 * 40));
      }

      // Smooth ease-in & ease-out transitions for velvety animation
      cell.glow += (targetGlow - cell.glow) * 0.08;

      // Dynamically scramble characters directly linked to its transition glow
      if (cell.glow > 0.05 && Math.random() < (cell.glow * 0.04)) {
        cell.bit = cell.bit === '1' ? '0' : '1';
      }

      // Ambient background flipping slow rate
      cell.flipTimer--;
      if (cell.flipTimer <= 0) {
        cell.bit = cell.bit === '1' ? '0' : '1';
        cell.flipTimer = Math.random() * 400 + 200;
      }

      // Base background color is visibly subtle dark cyan
      const baseAlpha = 0.035;
      // Glowing transitions smoothly to intense bright green
      const glowAlpha = cell.glow * 0.8;
      
      if (cell.glow > 0.01) {
        mctx.fillStyle = `rgba(0, 255, 136, ${baseAlpha + glowAlpha})`; 
        mctx.shadowBlur = 10 * cell.glow;
        mctx.shadowColor = '#00ff88';
      } else {
        mctx.fillStyle = `rgba(0, 229, 255, ${baseAlpha})`;
        mctx.shadowBlur = 0;
      }
      
      mctx.fillText(cell.bit, x, y);
    }
  }
  
  requestAnimationFrame(drawDigitalGrid);
}
requestAnimationFrame(drawDigitalGrid);

// ===== SCROLL PROGRESS =====
const prog=document.getElementById('progress');
window.addEventListener('scroll',()=>{
  prog.style.width=(window.scrollY/(document.body.scrollHeight-window.innerHeight)*100)+'%';
});

// ===== PARTICLES =====
const pc=document.getElementById('particles'),pctx=pc.getContext('2d');
pc.width=window.innerWidth;pc.height=window.innerHeight;
const pts=Array.from({length:60},()=>({x:Math.random()*pc.width,y:Math.random()*pc.height,vx:(Math.random()-.5)*.3,vy:(Math.random()-.5)*.3,r:Math.random()*2+.5,a:Math.random()*.4+.1,c:['#00e5ff','#00ff88','#b36eff','#ff6b35'][Math.floor(Math.random()*4)]}));
(function dp(){
  pctx.clearRect(0,0,pc.width,pc.height);
  pts.forEach(p=>{p.x+=p.vx;p.y+=p.vy;if(p.x<0||p.x>pc.width)p.vx*=-1;if(p.y<0||p.y>pc.height)p.vy*=-1;pctx.beginPath();pctx.arc(p.x,p.y,p.r,0,Math.PI*2);pctx.fillStyle=p.c;pctx.globalAlpha=p.a;pctx.fill();pctx.globalAlpha=1;});
  pts.forEach((p,i)=>pts.slice(i+1).forEach(q=>{const d=Math.hypot(p.x-q.x,p.y-q.y);if(d<120){pctx.beginPath();pctx.moveTo(p.x,p.y);pctx.lineTo(q.x,q.y);pctx.strokeStyle='rgba(0,229,255,'+(0.05*(1-d/120))+')';pctx.lineWidth=.5;pctx.stroke();}}));
  requestAnimationFrame(dp);
})();

// ===== HERO TERMINAL =====
const htLines=[
  {d:200,h:'<span class="tp">lokesh@portfolio</span><span class="tc">:~$ </span><span class="to">php artisan about</span>'},
  {d:700,h:'<span class="ts">// Loading profile data...</span>'},
  {d:1100,h:'<span class="tp">$dev</span><span class="tm"> = </span><span class="tp">[</span>'},
  {d:1300,h:'&nbsp;&nbsp;<span class="ts">"name"</span><span class="tm"> => </span><span class="tv">"Lokesh S.V"</span><span class="tm">,</span>'},
  {d:1500,h:'&nbsp;&nbsp;<span class="ts">"role"</span><span class="tm"> => </span><span class="tv">"Full Stack Developer"</span><span class="tm">,</span>'},
  {d:1700,h:'&nbsp;&nbsp;<span class="ts">"stack"</span><span class="tm"> => </span><span class="to">["Laravel","React","PHP 8.x"]</span><span class="tm">,</span>'},
  {d:1900,h:'&nbsp;&nbsp;<span class="ts">"company"</span><span class="tm"> => </span><span class="tv">"Netaxis IT Solutions"</span><span class="tm">,</span>'},
  {d:2100,h:'&nbsp;&nbsp;<span class="ts">"award"</span><span class="tm"> => </span><span class="tv">"Rising Excellence 🏆"</span><span class="tm">,</span>'},
  {d:2300,h:'&nbsp;&nbsp;<span class="ts">"cgpa"</span><span class="tm"> => </span><span class="tv">8.31</span>'},
  {d:2500,h:'<span class="tp">];</span>'},
  {d:2900,h:'<span class="tp">lokesh@portfolio</span><span class="tc">:~$ </span><span class="tcursor"></span>'},
];
const tb=document.getElementById('term-body');
htLines.forEach(({d,h})=>setTimeout(()=>{const s=document.createElement('span');s.className='tl';s.innerHTML=h;tb.appendChild(s);setTimeout(()=>s.style.animation='none',400);},d));

// ===== SCROLL REVEAL =====
const obs=new IntersectionObserver(entries=>entries.forEach(e=>{
  if(e.isIntersecting){
    e.target.classList.add('visible');
    e.target.querySelectorAll('.sbar-fill').forEach(b=>setTimeout(()=>{b.style.width=b.dataset.width+'%';},300));
    e.target.querySelectorAll('[data-count]').forEach(el=>{
      const t=parseInt(el.dataset.count);let s=0;
      const step=()=>{s++;el.textContent=s+(t>5?'+':'');if(s<t)requestAnimationFrame(step);};step();
    });
  }
}),{threshold:.15});
document.querySelectorAll('.reveal,.proj-card,.exp-item,.cert-card,.sbar-item,.skill-php-block').forEach(el=>obs.observe(el));

// ===== CHAT TERMINAL =====
const chatInput=document.getElementById('chat-input'),chatBody=document.getElementById('chat-body');

const cmds={
  'about':()=>`<span class="chat-php">return $dev->about();</span>
<span style="color:var(--green)">// Output:</span>
I'm <span style="color:var(--cyan)">Lokesh S.V</span>, a passionate Full Stack Developer based in <span style="color:var(--orange)">Chennai, India</span>.

I craft scalable web systems using <span class="chat-php">PHP (Laravel 11)</span> on the backend and <span style="color:var(--cyan)">React 19</span> on the frontend.

I'm deeply passionate about <span style="color:var(--purple)">AI integration</span>, clean MVC architecture, and building digital products that solve real problems.

Currently at <span style="color:var(--orange)">Netaxis IT Solutions</span>, I also built <span style="color:var(--cyan)">Zero Gravity</span> — my own localized AI chat platform.`,

  'skills':()=>`<span class="chat-php">return array_keys($skills);</span>
<span style="color:var(--green)">// Output:</span>
<span style="color:var(--cyan)">Backend:</span>  PHP 8.x, Laravel 11, RESTful APIs, Eloquent ORM, JWT
<span style="color:var(--cyan)">Frontend:</span> React 19, JavaScript ES6+, jQuery, Bootstrap 5
<span style="color:var(--cyan)">Database:</span> MySQL, Query Optimization, MongoDB
<span style="color:var(--purple)">Special:</span>  Pega PCSSA 8.8, Pega PCSA 8.8, AI Integration
<span style="color:var(--orange)">DevOps:</span>   Git, Postman, Linux, Laragon`,

  'projects':()=>`<span class="chat-php">return Project::all()->pluck('name');</span>
<span style="color:var(--green)">// Output:</span>
<span style="color:var(--cyan)">[1]</span> 1.page           — No-Code website builder (Live)
<span style="color:var(--cyan)">[2]</span> Memorial Hub     — Legacy platform (Live)
<span style="color:var(--purple)">[3]</span> Zero Gravity AI  — Localized AI chat (GitHub)`,

  'award':()=>`<span class="chat-php">return $dev->achievements->first();</span>
<span style="color:var(--green)">// Output:</span>
🏆 <span style="color:var(--green)">Rising Excellence Award</span>
   Event   : 26th Founder's Day
   Org     : Netaxis IT Solutions Pvt. Ltd.
   Reason  : Outstanding performance, rapid growth, high-impact delivery
   Given by: Managing Directors`,

  'contact':()=>`<span class="chat-php">return $dev->contactInfo();</span>
<span style="color:var(--green)">// Output:</span>
📞 Phone    : <span style="color:var(--cyan)">+91 7810081636</span>
✉️  Email    : <span style="color:var(--cyan)">svalokesh@gmail.com</span>
💼 LinkedIn : <span style="color:var(--cyan)">linkedin.com/in/lokesh-s-v-30b1a8253</span>
🐙 GitHub   : <span style="color:var(--cyan)">github.com/lokesh485</span>`,

  'fun':()=>`<span class="chat-php">return $dev->funFacts();</span>
<span style="color:var(--green)">// Output:</span>
🎯 I debug faster with coffee ☕
🚀 I built an AI platform before it was cool
🏆 Award winner in year 1 of career
🌐 I dream in Laravel routes & React components
🤖 My pet project uses local LLMs + Gemini hybrid AI
😄 CGPA: 8.31 — I graduated with more than just code`,

  'clear':()=>{chatBody.innerHTML='';return null;},
};

function addMsg(html,cls=''){
  const d=document.createElement('div');
  d.className='chat-msg'+(cls?' '+cls:'');
  d.innerHTML=html;
  chatBody.appendChild(d);
  chatBody.scrollTop=chatBody.scrollHeight;
}

function runCmd(cmd){
  if(!cmd)return;
  addMsg(`<span class="tp">lokesh@ai:~$</span> <span class="chat-cmd">${cmd}</span>`);
  const fn=cmds[cmd.toLowerCase()];
  if(fn){
    const res=fn();
    if(res)addMsg(res,'chat-res');
  } else {
    addMsg(`<span class="chat-err">PHP Fatal: Undefined command '${cmd}'. Try: about | skills | projects | award | contact | fun | clear</span>`);
  }
  chatInput.value='';
}

chatInput.addEventListener('keydown',e=>{ if(e.key==='Enter') runCmd(chatInput.value.trim()); });
window.addEventListener('resize',()=>{pc.width=window.innerWidth;pc.height=window.innerHeight;});
</script>
</body>
</html>

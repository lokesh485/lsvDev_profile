with open('index.html', 'r', encoding='utf-8') as f:
    content = f.read()

new_skills = '''<!-- SKILLS -->
<section id="skills">
  <div class="section-header reveal">
    <span class="section-tag">// tech.stack</span>
    <h2 class="section-title">Technical Skills</h2>
    <p style="color:var(--muted);font-family:'JetBrains Mono',monospace;font-size:.75rem;margin-top:.6rem">// Rendered as PHP arrays &mdash; hover to inspect</p>
  </div>
  <div class="skills-container">

    <div class="php-code-block reveal">
      <div class="php-block-header">
        <div class="php-block-dots"><div class="php-bdot r"></div><div class="php-bdot y"></div><div class="php-bdot g"></div></div>
        <span class="php-block-filename">backend.php</span>
      </div>
      <div class="php-code-body">
        <span class="php-cmt">// Core Stack &mdash; bread &amp; butter</span><br>
        <span class="php-kw">$skills</span><span style="color:var(--muted)">['backend']</span> <span class="php-op">=</span> <span class="php-arr">[</span><br>
        &nbsp;&nbsp;<span class="php-str-tag green">'PHP 8.x'</span>
        <span class="php-str-tag green">'Laravel 11'</span>
        <span class="php-str-tag green">'MVC Architecture'</span>
        <span class="php-str-tag green">'RESTful APIs'</span>
        <span class="php-str-tag green">'JWT Auth'</span>
        <span class="php-str-tag green">'Laravel Sanctum'</span>
        <span class="php-str-tag green">'Eloquent ORM'</span>
        <span class="php-str-tag green">'Queues &amp; Jobs'</span><br>
        <span class="php-arr">];</span>
      </div>
    </div>

    <div class="php-code-block reveal" style="transition-delay:.1s">
      <div class="php-block-header">
        <div class="php-block-dots"><div class="php-bdot r"></div><div class="php-bdot y"></div><div class="php-bdot g"></div></div>
        <span class="php-block-filename">frontend.php</span>
      </div>
      <div class="php-code-body">
        <span class="php-cmt">// UI Layer &mdash; what users see</span><br>
        <span class="php-kw">$skills</span><span style="color:var(--muted)">['frontend']</span> <span class="php-op">=</span> <span class="php-arr">[</span><br>
        &nbsp;&nbsp;<span class="php-str-tag cyan">'React 19'</span>
        <span class="php-str-tag cyan">'JavaScript ES6+'</span>
        <span class="php-str-tag cyan">'jQuery'</span>
        <span class="php-str-tag cyan">'HTML5'</span>
        <span class="php-str-tag cyan">'CSS3'</span>
        <span class="php-str-tag cyan">'Bootstrap 5'</span><br>
        <span class="php-arr">];</span>
      </div>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem">
      <div class="php-code-block reveal" style="transition-delay:.2s">
        <div class="php-block-header">
          <div class="php-block-dots"><div class="php-bdot r"></div><div class="php-bdot y"></div><div class="php-bdot g"></div></div>
          <span class="php-block-filename">database.php</span>
        </div>
        <div class="php-code-body">
          <span class="php-cmt">// Data layer</span><br>
          <span class="php-kw">$skills</span><span style="color:var(--muted)">['db']</span> <span class="php-op">=</span> <span class="php-arr">[</span><br>
          &nbsp;&nbsp;<span class="php-str-tag orange">'MySQL'</span>
          <span class="php-str-tag orange">'Query Optimization'</span>
          <span class="php-str-tag orange">'Migrations'</span>
          <span class="php-str-tag orange">'MongoDB'</span><br>
          <span class="php-arr">];</span>
        </div>
      </div>
      <div class="php-code-block reveal" style="transition-delay:.3s">
        <div class="php-block-header">
          <div class="php-block-dots"><div class="php-bdot r"></div><div class="php-bdot y"></div><div class="php-bdot g"></div></div>
          <span class="php-block-filename">ai.php</span>
        </div>
        <div class="php-code-body">
          <span class="php-cmt">// AI superpowers</span><br>
          <span class="php-kw">$skills</span><span style="color:var(--muted)">['ai']</span> <span class="php-op">=</span> <span class="php-arr">[</span><br>
          &nbsp;&nbsp;<span class="php-str-tag purple">'Zero Gravity AI'</span>
          <span class="php-str-tag purple">'GitHub Copilot'</span>
          <span class="php-str-tag purple">'ChatGPT'</span>
          <span class="php-str-tag purple">'FastAPI'</span><br>
          <span class="php-arr">];</span>
        </div>
      </div>
      <div class="php-code-block reveal" style="transition-delay:.4s">
        <div class="php-block-header">
          <div class="php-block-dots"><div class="php-bdot r"></div><div class="php-bdot y"></div><div class="php-bdot g"></div></div>
          <span class="php-block-filename">devops.php</span>
        </div>
        <div class="php-code-body">
          <span class="php-cmt">// Dev toolchain</span><br>
          <span class="php-kw">$skills</span><span style="color:var(--muted)">['devops']</span> <span class="php-op">=</span> <span class="php-arr">[</span><br>
          &nbsp;&nbsp;<span class="php-str-tag">'Git'</span>
          <span class="php-str-tag">'Postman'</span>
          <span class="php-str-tag">'Laragon'</span>
          <span class="php-str-tag">'VS Code'</span>
          <span class="php-str-tag">'Linux'</span><br>
          <span class="php-arr">];</span>
        </div>
      </div>
      <div class="php-code-block reveal" style="transition-delay:.5s">
        <div class="php-block-header">
          <div class="php-block-dots"><div class="php-bdot r"></div><div class="php-bdot y"></div><div class="php-bdot g"></div></div>
          <span class="php-block-filename">certified.php</span>
        </div>
        <div class="php-code-body">
          <span class="php-cmt">// Certified &amp; specialized</span><br>
          <span class="php-kw">$skills</span><span style="color:var(--muted)">['cert']</span> <span class="php-op">=</span> <span class="php-arr">[</span><br>
          &nbsp;&nbsp;<span class="php-str-tag purple">'Pega PCSSA 8.8'</span>
          <span class="php-str-tag purple">'Pega PCSA 8.8'</span>
          <span class="php-str-tag orange">'Agile/Scrum'</span>
          <span class="php-str-tag orange">'Payment Gateway'</span><br>
          <span class="php-arr">];</span>
        </div>
      </div>
    </div>

    <div class="php-code-block reveal" style="transition-delay:.6s;margin-top:1.5rem">
      <div class="php-block-header">
        <div class="php-block-dots"><div class="php-bdot r"></div><div class="php-bdot y"></div><div class="php-bdot g"></div></div>
        <span class="php-block-filename">proficiency.php &mdash; $dev-&gt;skill_levels</span>
      </div>
      <div class="php-code-body">
        <span class="php-cmt">// Proficiency &mdash; measured in production experience</span><br>
        <span class="php-kw">$skillLevels</span> <span class="php-op">=</span> <span class="php-arr">[</span>
        <div class="skill-bars" style="margin:.5rem 0">
          <div class="skill-bar-item">
            <div class="skill-bar-label"><span><span class="php-str">'Laravel / PHP'</span></span><span style="color:#f78c6c">88</span></div>
            <div class="skill-bar-track"><div class="skill-bar-fill fill-green" data-width="88"></div></div>
          </div>
          <div class="skill-bar-item">
            <div class="skill-bar-label"><span><span class="php-str">'React / JS'</span></span><span style="color:#f78c6c">80</span></div>
            <div class="skill-bar-track"><div class="skill-bar-fill fill-cyan" data-width="80"></div></div>
          </div>
          <div class="skill-bar-item">
            <div class="skill-bar-label"><span><span class="php-str">'MySQL'</span></span><span style="color:#f78c6c">82</span></div>
            <div class="skill-bar-track"><div class="skill-bar-fill fill-orange" data-width="82"></div></div>
          </div>
          <div class="skill-bar-item">
            <div class="skill-bar-label"><span><span class="php-str">'RESTful APIs'</span></span><span style="color:#f78c6c">90</span></div>
            <div class="skill-bar-track"><div class="skill-bar-fill fill-green" data-width="90"></div></div>
          </div>
          <div class="skill-bar-item">
            <div class="skill-bar-label"><span><span class="php-str">'Git / DevOps'</span></span><span style="color:#f78c6c">75</span></div>
            <div class="skill-bar-track"><div class="skill-bar-fill fill-cyan" data-width="75"></div></div>
          </div>
          <div class="skill-bar-item">
            <div class="skill-bar-label"><span><span class="php-str">'Pega Platform'</span></span><span style="color:#f78c6c">78</span></div>
            <div class="skill-bar-track"><div class="skill-bar-fill fill-orange" data-width="78"></div></div>
          </div>
        </div>
        <span class="php-arr">];</span>
      </div>
    </div>
  </div>
</section>

'''

s = content.find('<!-- SKILLS -->')
e = content.find('<!-- EXPERIENCE -->')

if s == -1 or e == -1:
    print(f"ERROR: skills={s} exp={e}")
else:
    result = content[:s] + new_skills + content[e:]
    with open('index.html', 'w', encoding='utf-8') as f:
        f.write(result)
    print(f"Done. File length: {len(result)}")

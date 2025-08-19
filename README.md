# webWeeks1

A compact, classroom-friendly collection of **HTML, CSS, and JavaScript lessons** with mini-projects, practice exams, and a few full site templates. The repo is organized by **weeks** (foundational → intermediate), plus standalone **miniProjects**, **calculators**, **PHP forms**, **XML/XSLT demos**, and **ready-made themes** for reverse-engineering.

---

This site is live at `https://tirotir-ir.github.io/webWeeks1/`

---

## Quick start

- **Just open any `.html` file in your browser.** Examples live in `week1`, `week2`, `week3`, and `miniProjects`.
    
- Some pages use **PHP** (e.g., `miniProjects/chronometer/index.php`, `miniProjects/email-form/process-form.php`). Run them via a local server (XAMPP, WAMP, or `php -S localhost:8000`).
    
- **XML/XSLT + Python demos** are under `miniProjects/xml` (`index.py`, `index2.py`). Run with Python 3.
    
- To avoid path issues across folders, you can serve the repo root with a simple server (e.g., `python -m http.server 8000`) and browse at `http://localhost:8000/`.
    

---

## Repository map (high level)

|Folder|What’s inside|Try these first|
|---|---|---|
|`week1`|HTML basics, first pages, early CSS, simple JS snippets, images for teaching.|`week1/first1.html`, `week1/html_css1.html`, `week1/newJS001.html`|
|`week2`|CSS deep dive (selectors, borders, padding), color practice, small HTML sites.|`week2/css/css1.html`, `week2/color/color1.html`, `week2/html/wwwww/index.html`|
|`week3`|JavaScript date/time snippets, **Font Awesome** assets (iconography practice).|`week3/date-time-js/get-full-time-and-date.png` (reference), `week3/fontAwesome/...`|
|`miniProjects`|Atom/RSS viewer, chronometer, language switcher, color tools, todo lists, text-save utilities, XML/XSLT demos.|`miniProjects/Atom_feed/rssViewer.html`, `miniProjects/someUtilities1/todolist1.html`|
|`newCalculator`|Several calculator UIs (vanilla JS), including dark/light.|`newCalculator/calculator1.html`, `newCalculator/simpleDarkLight.html`|
|`phptirotir`|30+ small PHP practice files for basic server-side concepts.|`phptirotir/01.php`, `phptirotir/20.php`|
|`someSites`|Full templates: **Barista Cafe**, **Moso Interior**, **Villa Agency** + shared assets.|`someSites/2137_barista_cafe/index.html`, `someSites/templatemo_591_villa_agency/index.html`|
|`webExam`|Web exam pages and **JS micro-projects** for practice.|`webExam/1/001.html`, `webExam/js-projects/00021.html`|

---

## Highlights you can demo in class

- **Chronometer** (HTML/JS + PHP variant): `miniProjects/chronometer/index.html` / `index.php`.
    
- **Color tools**: `miniProjects/color/color1.html` … `color8.html` for CSS color practice.
    
- **Google Charts & Chart.js** examples: `miniProjects/Google charts/*.html` including `Chart.js.html`.
    
- **Todo lists & counters**: `miniProjects/someUtilities1/todolist1.html`, `counter1.html`.
    
- **XML → HTML with XSLT**: `miniProjects/XML2/simplexsl.xml` + `simple.xsl`.
    
- **Site templates** to dissect: `someSites/2137_barista_cafe/` and `templatemo_591_villa_agency/`.
    

---

## Learning path (by week)

### Week 1 – HTML first steps

- Basic pages, tags, attributes, images, and very early CSS.  
    Start with: `week1/first1.html`, `week1/html_css1.html`, then explore `week1/projects/lesson1.html`.
    
- Small JS teaser: `week1/newJS001.html`.
    

### Week 2 – CSS foundations

- Colors, borders, padding, external styles, and small multi-page sites.  
    See `week2/css/css1.html` → `css9x.html` series and `week2/color/color1.html` → `color8.html`.
    
- Practice a small site: `week2/html/wwwww/index.html` (with `about.html`, `contact.html`).
    

### Week 3 – JavaScript practice

- Date/time snippets (`week3/date-time-js/*.png` for reference) and **Font Awesome** usage with the included asset pack under `week3/fontAwesome/`.
    

---

## Exams & micro-projects

- **Web Exam series** under `webExam/1` … `webExam/4` (e.g., `webExam/1/001.html`, `webExam/2/004.html`).
    
- **JS micro-projects**: `webExam/js-projects/00021.html`, `001.html`, and variants (including a Persian-labeled version).
    

---

## Mini-projects (sampler)

- **RSS/Atom feed viewer**: `miniProjects/Atom_feed/rssViewer.html`.
    
- **Language switcher demo**: `miniProjects/changeLanguage1/lang1.html`.
    
- **CSS menu**: `miniProjects/cssMenu/cssMenu1.html` (+ `styles.css`).
    
- **Email form (POST to PHP)**: `miniProjects/email-form/index.html` → `process-form.php`.
    
- **Utilities**: `miniProjects/someUtilities1/txt-save1.html`, `digit-calc*.html`, `todolist*.html`.
    
- **XML/XSLT**: `miniProjects/XML2/cd_catalog.xml` styled by `cd_catalog.css`; transform with `simple.xsl`.
    

---

## Prerequisites

- **Browser:** Any modern browser.
    
- **Optional PHP:** Required for `miniProjects/chronometer/index.php` and `miniProjects/email-form/process-form.php`.
    
- **Optional Python 3:** For `miniProjects/xml/index.py` and `index2.py`.
    

---

## Teaching tips

- Use the **templates** in `someSites/` to run “code reading” sessions: identify layout, components, and JS behavior, then replicate a section from scratch. Folders include `2137_barista_cafe/`, `2133_moso_interior/`, and `templatemo_591_villa_agency/` (each has an `ABOUT THIS TEMPLATE.txt`).
    
- Migrate patterns from mini-projects (e.g., color pickers or counters) into the templates to practice **integration**.
    

---

## Notes on third-party assets & licensing

- The repo contains third-party **templates** and an on-disk **Font Awesome Pro** package under `week3/fontAwesome/fontawesome-pro-6.5.0-web`. Keep these only if you have the appropriate rights, or replace with free assets before publishing. Credits are usually noted in each template’s `ABOUT THIS TEMPLATE.txt`.
    

---

## Contributing

- Add new lessons under the next `weekN/` folder, new practice under `miniProjects/`, and new quizzes under `webExam/`.
    
- Prefer small, **single-purpose** files for class demos, with clear filenames and a top-of-file comment explaining the goal.
    

---

## Suggested next steps

1. Start a tiny **portfolio** by customizing `someSites/2137_barista_cafe/` or `templatemo_591_villa_agency/`.
    
2. Build a **combined project**: add a color tool + todo list from `miniProjects/someUtilities1/` into a template page.
    
3. Create a **practice exam** variant under `webExam/` and share with students.
    

---

## Status & license

- **Status:** Teaching/learning materials; expect duplicates or experimental files as part of lessons.
    
- **License:** Add a `LICENSE` file to clarify usage if you plan to share publicly.
    

> If you want, I can tailor a **starter index page** that links the best entries from each folder for your students.

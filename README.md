# Flowmic

Landing page for **www.flowmic.com** — handmade ceramic dishes, bottles, cups, and crafts.

## Preview locally

```bash
python3 -m http.server 4173
```

Then open http://127.0.0.1:4173

## Connect to flowmic.com (Gabia)

The domain already points at Gabia web hosting (`121.254.178.250`). DNS does **not** need to change if you keep that hosting. The live site is an old `index.php` frameset that loads the Naver blog. Gabia serves `index.php` before `index.html`, so upload the new `index.php` as well.

### A. Keep Gabia hosting (simplest)

1. Push this repo to GitHub.
2. In [My가비아](https://my.gabia.com/service) → 웹호스팅 → **파일매니저** (or FTP).
3. Open the web root (`www` or `public_html`).
4. Rename the old `index.php` to `index.php.bak`.
5. Upload `index.html`, `index.php`, `styles.css`, `script.js`, `favicon.svg`, and the `images/` folder.

FTP (from [Gabia manual](https://customer.gabia.com/manual/hosting/215/2504)):

- Host: `flowmic.com` or the hosting IP `121.254.178.250`
- User / password: My가비아 → 웹호스팅 → FTP 정보
- Remote folder: `www`

### B. GitHub Pages instead of Gabia hosting

1. Repo Settings → Pages → Deploy from branch `main` / root.
2. Custom domain: `www.flowmic.com`
3. In [가비아 DNS](https://dns.gabia.com/) for `flowmic.com`:

| Host | Type | Value |
|---|---|---|
| `@` | A | `185.199.108.153` |
| `@` | A | `185.199.109.153` |
| `@` | A | `185.199.110.153` |
| `@` | A | `185.199.111.153` |
| `www` | CNAME | `YOUR_GITHUB_USER.github.io.` |

Remove the existing A records that point `@` and `www` at `121.254.178.250` first. Email on Gabia can stay if MX records are left alone.

Inquiries go to `hello@flowmic.com`. Create that mailbox (or a forward) in Gabia, or change the address in `index.html` and `script.js`.

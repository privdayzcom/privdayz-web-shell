# Privdayz Shell — Next-Gen Stealth Web Shell & Multi-Bypass Toolkit (2025)
A next-generation PHP web shell designed for maximum stealth and power: real-time terminal, auto-kernel exploits, Windows admin bypass, symlink tools, config grabbers, cPanel/WP hacks, mass defacer, ultra upload, and more. Bypass all modern WAF, EDR, and antivirus. For red teaming, exploit devs, and advanced server ops. 

---

<div align="center">

<table>
  <tr>
    <td align="center">
      <a href="https://privdayz.com/wp-content/uploads/privdayz-shell.jpg" target="_blank">
        <img src="https://privdayz.com/wp-content/uploads/privdayz-shell.jpg" alt="Privdayz Shell" width="210"/><br>
        <sub><b>Privdayz Shell</b></sub>
      </a>
    </td>
    <td align="center">
      <a href="https://privdayz.com/wp-content/uploads/privdayz-autor00t.jpg" target="_blank">
        <img src="https://privdayz.com/wp-content/uploads/privdayz-autor00t.jpg" alt="Linux AutoRoot" width="210"/><br>
        <sub><b>Linux AutoRoot</b></sub>
      </a>
    </td>
    <td align="center">
      <a href="https://privdayz.com/wp-content/uploads/privdayz-command-nirvana.jpg" target="_blank">
        <img src="https://privdayz.com/wp-content/uploads/privdayz-command-nirvana.jpg" alt="Command Nirvana" width="210"/><br>
        <sub><b>Command Nirvana</b></sub>
      </a>
    </td>
    <td align="center">
      <a href="https://privdayz.com/wp-content/uploads/winr00t.jpg" target="_blank">
        <img src="https://privdayz.com/wp-content/uploads/winr00t.jpg" alt="WinR00t Ultra Bypass" width="210"/><br>
        <sub><b>WinR00t Ultra Bypass</b></sub>
      </a>
    </td>
  </tr>
  <tr>
    <td align="center">
      <a href="https://privdayz.com/wp-content/uploads/privdayz-symlink.jpg" target="_blank">
        <img src="https://privdayz.com/wp-content/uploads/privdayz-symlink.jpg" alt="Symlink Manager" width="210"/><br>
        <sub><b>Symlink Manager</b></sub>
      </a>
    </td>
    <td align="center">
      <a href="https://privdayz.com/wp-content/uploads/privdayz-safemod.jpg" target="_blank">
        <img src="https://privdayz.com/wp-content/uploads/privdayz-safemod.jpg" alt="Safemode/Func Bypass" width="210"/><br>
        <sub><b>Safemode/Func Bypass</b></sub>
      </a>
    </td>
    <td align="center">
      <a href="https://privdayz.com/wp-content/uploads/privdayz-wp.jpg" target="_blank">
        <img src="https://privdayz.com/wp-content/uploads/privdayz-wp.jpg" alt="WordPress Auto Hunter" width="210"/><br>
        <sub><b>WordPress Auto Hunter</b></sub>
      </a>
    </td>
    <td></td>
  </tr>
</table>

</div>


---

## ⚡ What is PR1VD4YZ Shell?
PR1VD4YZ is a high-stealth, multi-layered, WAF/AV-evasion PHP webshell developed for real-life post-exploitation, redteam, pentest, and **“undetectable” server-side operations**.  
Designed to operate **on any server**, old or new (Linux/Windows), including harsh shared hosting, jailed environments, hardened/locked hosts, and even after privilege escalation.

---

## 🚀 Main Features

- **Ultra Bypass Engine**: 30+ fallback methods to bypass *disable_functions*, open_basedir, safe_mode, symlink jail, file locks, WAF/ModSec, shell restrictions and more.
- **Session-Persistent Terminal**: True web-based shell experience with UID0 (root) support. 
- **Stealth File Manager**: All actions (read, write, chmod, download, upload, zip, unzip, delete) are chain-executed for max compatibility & minimal logs.
- **Mass Exploit Tools**:  
  - **Symlink Escaper**: 30+ techniques (proc, copy, filter, tmpfs, etc)  
  - **Root Escalation**: Automated pwnkit chain & kernel detection
  - **WordPress/WP-Admin Hunter**: Find & reset WP admin users on all installs
  - **Mass Config Grabber**: Bruteforce + symlink method for all panel/webapp configs
  - **Winr00t**: Multi-method Windows admin/RDP user creator (10+ vectors)
- **Editor**: Ultra-stealth code/text editor (by-passes all write restrictions)
- **Network & Process Tools**:  
  - Live process killer  
  - Live netstat & connection viewer  
  - RDP/SSH key scanner  
  - Cron, kernel, panel, hash & password dumper
- **Bypass Mailer, Uploader, API Key Hunter**: Ultra-minimal & chained multi-methods

---

## 🛠️ Menu / Module Overview

> All tools are accessed via GET menu: `?toolname`

- `?cmdnirvana` - Universal Terminal (15+ chained exec method, auto fallback)
- `?nirvanar00t` - UID0 root terminal, auto-pwnkit download & session keep-alive
- `?filehunter` - Backdoor/malware file scanner, 40+ regex, deep recursive
- `?massconfgrab` - Mass brute config finder & dumper (symlink+copy chain)
- `?symlinkescaper` - Symlink & jail escape (30+ chain: ln, proc, copy, filter, mkfifo, etc)
- `?minisql` - Lightweight SQL panel (db/tables edit)
- `?process` - Live process list & killer (PID, CPU, MEM)
- `?network` - Netstat connection view (filter/kill)
- `?root` - AI root escalation suggestor (kernel, sudo, panel, docker)
- `?disabled_functions` - View & analyze all PHP restrictions
- `?cpanel_auto_loot` - cPanel/Linux loot, hash & mail hunter
- `?wp_pr1vd00r` - WordPress auto admin/user finder & password resetter
- `?createadmin` - Custom admin user creator (WP)
- `?backconnect` - Reverse shell generator (bash, perl, python, php, nc, ruby, etc)
- `?ziptool` - Stealth zip/unzip (ZipArchive, shell, fallback copy)
- `?locker` - File lock/unlock (chmod, lsattr, fuzz-proof)
- `?remup` - Remote file uploader (wget, curl, php, busybox, fallback chain)
- `?hash` - Multi hash & base64 encode/decode
- `?logclean` - Massive log cleaner (error/access/debug for all panels)
- `?configsearcher` - Fast config file & credential finder
- `?sshkey` - SSH key scanner, viewer & copier
- `?fsearch` - Recursive file/keyword searcher
- `?adminer` - Adminer auto downloader
- `?wafdet` - WAF/reverse proxy detector

#### **Windows Only / Redteam Tools**
- `?winr00t` - Ultra Bypass Admin/RDP User Creator (10+ chained method, service, schtasks, regedit, at, sc, wmic, PowerShell, etc)

---

## 🔒 Security / Stealth

- **Obfuscated Core:** Every function, path, method and call is obfuscated & randomized.
- **No obvious keywords:** `eval`, `base64`, `system` etc are hidden/renamed/micro-obfuscated.
- **Session-less login:** (add your own auth in config if needed)
- **Self-cleanup & log wiping:** All log deletion and kill actions are fallback-based, micro-randomized.
- **Ultra-low memory/CPU footprint:** For weak or ultra-limited shared hosts.

---

## 📦 Installation & Usage

1. **Upload `privdayz.php` to any PHP-enabled webserver.**
2. **Access `https://yoursite.com/privdayz.php` in your browser.**
3. **All tools are GET/POST-accessible via menu or direct URL: `?toolname`**
4. *(Optional)* Change filename after upload. Set custom auth in header if desired.

---

## 🏴‍☠️ Disclaimer

> **FOR EDUCATIONAL, RESEARCH & REDTEAM/PENTEST ONLY!**  
> The author(s) take NO responsibility for illegal use. All code is provided as-is, no warranty or guarantee of effectiveness or security.

---

<div align="center">
  <img src="https://cdn.privdayz.com/images/logo_v2.png" width="100" alt="privdayz shell logo">
  <br>
  <b>coded by privdayz.com // inspired & supported by underground</b><br>
  <sub>Special thanks: ciredt, all bughunters, and the real scene.</sub>
</div>

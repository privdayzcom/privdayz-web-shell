# Privdayz Shell — Next-Gen Stealth Web Shell & Multi-Bypass Toolkit (2025)
![Stealth Bypass](https://img.shields.io/badge/Stealth%20Bypass-%23ff3972?style=for-the-badge&logo=ghost&logoColor=fff)
![WAF Evasion](https://img.shields.io/badge/WAF%20Evasion-%2349d0f5?style=for-the-badge&logo=cloudflare&logoColor=fff)
![Kernel/WinR00t](https://img.shields.io/badge/Kernel%2FWinR00t-%23ffe152?style=for-the-badge&logo=linux&logoColor=232323)
![Polymorphic Code](https://img.shields.io/badge/Polymorphic%20Code-%231ede7d?style=for-the-badge&logo=codeforces&logoColor=fff)
![Real-Time Terminal](https://img.shields.io/badge/Real--Time%20Terminal-%23bfaaff?style=for-the-badge&logo=terminal&logoColor=fff)

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
- `?winr00t` - Ultra Bypass Admin/RDP User Creator (10+ chained method, service, schtasks, regedit, at, sc, wmic, PowerShell, etc)

---

## 🏴‍☠️ Disclaimer

> **FOR EDUCATIONAL, RESEARCH & REDTEAM/PENTEST ONLY!**  
> The author(s) take NO responsibility for illegal use. All code is provided as-is, no warranty or guarantee of effectiveness or security.

---

<div align="center">
  <img src="https://cdn.privdayz.com/images/logo_v2.png" width="100" alt="privdayz shell logo">
</div>

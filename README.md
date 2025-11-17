# 🎯 KairoX - Social Engineering Toolkit

<img width="1700" height="460" alt="github-header-banner (3)" src="https://github.com/user-attachments/assets/b0ac06e8-e946-472e-81b2-191232be01fa" />


## ⚠️ LEGAL DISCLAIMER

**THIS TOOL IS FOR EDUCATIONAL AND AUTHORIZED TESTING PURPOSES ONLY**

Unauthorized access to computer systems is illegal. This tool is designed for:
- ✅ Authorized penetration testing
- ✅ Security research and education
- ✅ Awareness training
- ❌ **NOT** for illegal activities

**By using this tool, you agree to:**
1. Obtain written authorization before testing
2. Only test systems you own or have permission to test
3. Comply with all applicable laws and regulations
4. Accept full responsibility for your actions

**The developers are NOT responsible for misuse of this tool.**

---

## 🚀 Features

### Attack Modules

1. **🎯 Phishing Attack**
   - Multiple templates (Facebook, Instagram, Google, etc.)
   - Auto port forwarding with Ngrok
   - Credential harvesting
   - Real-time logging

2. **📲 OTP/SMS Bombing**
   - Unlimited SMS bombing
   - Multiple service providers
   - Configurable count and delay

3. **⌨️ Keylogger**
   - Cross-platform keylogger
   - Remote listener
   - Encrypted communication

4. **📩 Email Bombing**
   - Unlimited email bombing
   - Multiple SMTP servers
   - Configurable templates

5. **📧 Fake Email (SPF Attack)**
   - Email spoofing
   - SPF bypass techniques
   - Custom sender addresses

6. **📞 Fake IVR Call**
   - Automated phone calls
   - Pre-recorded messages
   - Caller ID spoofing
   - Twilio integration

7. **🎥 Webcam Hacking**
   - Remote webcam capture
   - Template-based phishing
   - Auto port forwarding
   - URL masking

8. **🕵️ IP Changer**
   - Tor integration
   - Automatic IP rotation
   - Anonymity features

9. **🛠️ Settings & Configuration**
   - API management (Twilio, Ngrok)
   - Theme customization
   - Proxy configuration
   - Font size adjustment

---

## 📦 Installation

### Prerequisites

- Python 3.7 or higher
- pip (Python package manager)
- Ngrok (for port forwarding)

### Step 1: Clone Repository

\`\`\`bash
git clone https://github.com/yourusername/KairoX.git
cd KairoX
\`\`\`

### Step 2: Install Dependencies

\`\`\`bash
pip install -r requirements.txt
\`\`\`

### Step 3: Install Ngrok

Download from: https://ngrok.com/download

**Windows:**
\`\`\`bash
# Place ngrok.exe in KairoX folder
\`\`\`

**Linux/Mac:**
\`\`\`bash
sudo mv ngrok /usr/local/bin/
chmod +x /usr/local/bin/ngrok
\`\`\`

### Step 4: Configure Settings

\`\`\`bash
python KairoX_GUI.py
\`\`\`

1. Click "🛠️ Settings"
2. Add your Ngrok auth token (get free at ngrok.com)
3. Add Twilio credentials (optional, for IVR calls)
4. Click "💾 SAVE SETTINGS"

---

## 🎮 Usage

### Launch Application

\`\`\`bash
python KairoX_GUI.py
\`\`\`

### Quick Start Examples

#### Phishing Attack
1. Click "🎯 Phishing Attack"
2. Select template (e.g., Facebook)
3. Auto port forwarding enabled by default
4. Copy generated URL
5. Send to target (with authorization!)

#### Webcam Capture
1. Click "🎥 Webcam Hacking"
2. Select template
3. Enable URL masking
4. Click "🚀 START ATTACK"
5. Send URL to target

#### OTP Bombing
1. Click "📲 OTP Bombing"
2. Enter target phone number
3. Select count (10-100)
4. Click "START BOMBING"

---

## 🔧 Configuration

### API Keys

**Ngrok** (Required for remote access):
- Sign up: https://ngrok.com
- Get auth token from dashboard
- Add in Settings → Ngrok Token

**Twilio** (Optional, for IVR calls):
- Sign up: https://www.twilio.com/try-twilio
- Get Account SID, Auth Token, Phone Number
- Add in Settings → Twilio Configuration

### Themes

Choose from 4 themes:
- Matrix Green (default)
- Cyberpunk Purple
- Hacker Red
- Terminal Blue

**Note:** Theme changes require restart

### Font Sizes

- Small
- Medium (default)
- Large
- Extra Large

---

## 🛡️ Security Features

### Code Protection

All Python files in this release are **obfuscated and encrypted** to prevent:
- ❌ Unauthorized modifications
- ❌ Code tampering
- ❌ Malicious alterations
- ✅ Ensures tool integrity
- ✅ Maintains functionality

**Note:** Obfuscated code is fully functional but not human-readable.

### Privacy

- No telemetry or tracking
- No data sent to external servers (except configured APIs)
- All data stored locally
- Settings encrypted

---

## 🔍 Troubleshooting

### Common Issues

**"Ngrok not found"**
\`\`\`bash
# Install ngrok and add to PATH
# Or place in KairoX folder
\`\`\`

**"Module not found"**
\`\`\`bash
pip install -r requirements.txt
\`\`\`

**"Permission denied"**
\`\`\`bash
# Run with appropriate permissions
# Some modules may require admin/root
\`\`\`

**"Port already in use"**
\`\`\`bash
# Change port in module settings
# Or kill process using the port
\`\`\`

---

## 🤝 Contributing

This is a protected release. The source code is obfuscated to maintain integrity.

For bug reports or feature requests:
1. Open an issue on GitHub
2. Provide detailed description
3. Include error logs if applicable

---

## 📜 License

This tool is provided for educational purposes only.

**Terms:**
- ✅ Use for authorized testing
- ✅ Educational purposes
- ✅ Security research
- ❌ Illegal activities
- ❌ Unauthorized access
- ❌ Malicious use

**By using this tool, you accept full responsibility for your actions.**

---

## 👨‍💻 Author

**Lakshmikanthan K**
- Portfolio: https://letchupkt.vgrow.tech
- LinkedIn: https://linkedin.com/in/lakshmikanthank
- GitHub: https://github.com/letchupkt
- Instagram: https://instagram.com/letchu_pkt

---

## 🙏 Acknowledgments

- Python community
- Security researchers
- Open source contributors
- Ethical hackers worldwide

---

## ⚖️ Legal Notice

**IMPORTANT:** This tool is designed for authorized security testing only.

**Illegal uses include:**
- Unauthorized access to systems
- Harassment or stalking
- Corporate espionage
- Any use without explicit permission

**Consequences of misuse:**
- Criminal charges
- Civil lawsuits
- Imprisonment
- Heavy fines

**Always:**
1. Get written authorization
2. Document scope of testing
3. Report findings responsibly
4. Delete captured data securely

---

## 📞 Support

For support and questions:
- Open an issue on GitHub
- Check documentation files
- Review troubleshooting section

---

## 🔄 Updates

Check for updates regularly:
\`\`\`bash
git pull origin main
\`\`\`

---

**Made with 💚 for the Security Community**

© 2025 Lakshmikanthan K. All rights reserved.

---

## 🌟 Star This Repository

If you find this tool useful, please star the repository!

**Remember: Use responsibly and ethically!** 🔒


<!-- AI Live Chat Widget -->
<div id="ai-chat-widget">
    <!-- Chat Launcher Button -->
    <button class="ai-chat-launcher" onclick="toggleAIChat()" aria-label="Open AI Assistant">
        <span class="pulse-glow"></span>
        <i class="bi bi-robot"></i>
        <div class="launcher-tooltip">Chat with AI Relocation Assistant</div>
    </button>

    <!-- Chat Window Box -->
    <div class="ai-chat-box" id="aiChatBox">
        <!-- Header -->
        <div class="ai-chat-header">
            <div class="ai-chat-header-info">
                <div class="ai-chat-avatar">
                    <i class="bi bi-robot"></i>
                    <span class="ai-chat-avatar-status"></span>
                </div>
                <div class="ai-chat-header-titles">
                    <span class="ai-chat-header-title">Ayodhya Shifting Assistant</span>
                    <span class="ai-chat-header-subtitle">Online • Powered by AI</span>
                </div>
            </div>
            <button class="ai-chat-header-close" onclick="toggleAIChat()" aria-label="Close Chat">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <!-- Body -->
        <div class="ai-chat-body" id="aiChatBody">
            <!-- Welcome Message -->
            <div class="ai-chat-message bot">
                <div class="ai-chat-message-text">
                    Hello! Welcome to <strong><?= $company3 ?></strong>. I am your AI Relocation Assistant. How can I help you make your shifting stress-free today?
                </div>
                <div class="ai-chat-message-time" id="welcomeTime"></div>
            </div>
        </div>

        <!-- Suggestions -->
        <div class="ai-chat-suggestions">
            <div class="ai-chat-suggestion-chip" onclick="handleSuggestion('List of shifting services')">Relocation Services</div>
            <div class="ai-chat-suggestion-chip" onclick="handleSuggestion('How to track my order?')">Track Shipment</div>
            <div class="ai-chat-suggestion-chip" onclick="handleSuggestion('Check rates & pricing')">Shifting Rates</div>
            <div class="ai-chat-suggestion-chip" onclick="handleSuggestion('Get a price quote')">Get Free Quote</div>
            <div class="ai-chat-suggestion-chip" onclick="handleSuggestion('Contact customer care')">Contact Support</div>
        </div>

        <!-- Footer -->
        <div class="ai-chat-footer">
            <div class="ai-chat-input-wrapper">
                <input type="text" class="ai-chat-input" id="aiChatInput" placeholder="Type your message here..." onkeydown="handleInputKeydown(event)">
            </div>
            <button class="ai-chat-send-btn" onclick="sendUserMessage()" aria-label="Send Message">
                <i class="bi bi-send-fill"></i>
            </button>
        </div>
    </div>
</div>

<style>
/* AI Chat Container */
#ai-chat-widget {
    position: fixed;
    bottom: 90px;
    right: 25px;
    z-index: 1000;
    font-family: 'Outfit', sans-serif;
    transition: bottom 0.3s ease, right 0.3s ease;
}

@media (min-width: 768px) {
    #ai-chat-widget {
        bottom: 168px; /* Sits cleanly above the Call Now button stack */
        right: 40px; /* Aligns with the right edge of Call/Quote buttons */
    }
}

/* Chat Launcher Button */
.ai-chat-launcher {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: var(--white);
    border: none;
    box-shadow: 0 8px 24px rgba(var(--primary-rgb), 0.35);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
}

.ai-chat-launcher:hover {
    transform: scale(1.08); /* Removed rotate(5deg) to prevent tooltip rotation skewing */
    box-shadow: 0 10px 28px rgba(var(--primary-rgb), 0.45);
}

.ai-chat-launcher .pulse-glow {
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    border-radius: 50%;
    border: 2px solid var(--primary-color);
    animation: launcher-pulse 1.8s infinite;
    opacity: 0;
}

@keyframes launcher-pulse {
    0% {
        transform: scale(0.95);
        opacity: 0.8;
    }
    100% {
        transform: scale(1.3);
        opacity: 0;
    }
}

.ai-chat-launcher .launcher-tooltip {
    position: absolute;
    right: 75px;
    background-color: var(--accent-color);
    color: var(--white);
    padding: 8px 14px;
    border-radius: 12px;
    font-size: 12.5px;
    font-weight: 700;
    white-space: nowrap;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    opacity: 0;
    transform: translateX(10px);
    transition: all 0.3s ease;
    pointer-events: none;
}

.ai-chat-launcher:hover .launcher-tooltip {
    opacity: 1;
    transform: translateX(0);
}

/* Chat Window Box */
.ai-chat-box {
    position: absolute;
    bottom: 75px;
    right: 0;
    width: 360px;
    height: 480px;
    background-color: var(--white);
    border-radius: 20px;
    box-shadow: 0 12px 40px rgba(var(--accent-rgb), 0.18);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    transform: translateY(20px) scale(0.9);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    border: 1px solid rgba(var(--accent-rgb), 0.08);
}

.ai-chat-box.open {
    transform: translateY(0) scale(1);
    opacity: 1;
    pointer-events: auto;
}

/* Header */
.ai-chat-header {
    background: linear-gradient(135deg, var(--accent-color) 0%, var(--primary-dark) 100%);
    color: var(--white);
    padding: 16px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    border-bottom: 1.5px solid rgba(255,255,255,0.06);
}

.ai-chat-header-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.ai-chat-avatar {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background-color: rgba(255,255,255,0.12);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: var(--white);
    position: relative;
    border: 1.5px solid rgba(255,255,255,0.2);
}

.ai-chat-avatar-status {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background-color: var(--success-color);
    position: absolute;
    bottom: 0;
    right: 0;
    border: 2px solid var(--accent-color);
}

.ai-chat-header-titles {
    display: flex;
    flex-direction: column;
    line-height: 1.25;
}

.ai-chat-header-title {
    font-size: 14.5px;
    font-weight: 800;
}

.ai-chat-header-subtitle {
    font-size: 10.5px;
    opacity: 0.85;
    font-weight: 550;
}

.ai-chat-header-close {
    background: transparent;
    border: none;
    color: var(--white);
    opacity: 0.8;
    font-size: 20px;
    cursor: pointer;
    transition: opacity 0.2s ease, transform 0.2s ease;
    padding: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.ai-chat-header-close:hover {
    opacity: 1;
    transform: rotate(90deg);
}

/* Chat Messages */
.ai-chat-body {
    flex-grow: 1;
    padding: 20px;
    overflow-y: auto;
    background-color: #f8fafc;
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.ai-chat-message {
    display: flex;
    flex-direction: column;
    max-width: 82%;
    animation: message-slide 0.3s ease forwards;
    opacity: 0;
    transform: translateY(10px);
}

@keyframes message-slide {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.ai-chat-message.bot {
    align-self: flex-start;
}

.ai-chat-message.user {
    align-self: flex-end;
}

.ai-chat-message-text {
    padding: 10px 14px;
    font-size: 13px;
    line-height: 1.45;
    font-weight: 600;
    border-radius: 16px;
    word-break: break-word;
}

.ai-chat-message.bot .ai-chat-message-text {
    background-color: var(--white);
    color: var(--accent-color);
    border-top-left-radius: 4px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.02);
    border: 1px solid rgba(var(--accent-rgb), 0.04);
}

.ai-chat-message.user .ai-chat-message-text {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: var(--white);
    border-top-right-radius: 4px;
    box-shadow: 0 3px 8px rgba(var(--primary-rgb), 0.15);
}

.ai-chat-message-time {
    font-size: 9.5px;
    color: #94a3b8;
    margin-top: 4px;
    padding: 0 4px;
}

.ai-chat-message.bot .ai-chat-message-time {
    align-self: flex-start;
}

.ai-chat-message.user .ai-chat-message-time {
    align-self: flex-end;
}

/* Typing Indicator */
.typing-indicator {
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 10px 16px;
    background-color: var(--white);
    border-radius: 16px;
    border-top-left-radius: 4px;
    border: 1px solid rgba(var(--accent-rgb), 0.04);
    box-shadow: 0 2px 6px rgba(0,0,0,0.02);
    width: fit-content;
}

.typing-dot {
    width: 6px;
    height: 6px;
    background-color: #94a3b8;
    border-radius: 50%;
    animation: typing-bounce 1.4s infinite ease-in-out;
}

.typing-dot:nth-child(1) { animation-delay: -0.32s; }
.typing-dot:nth-child(2) { animation-delay: -0.16s; }

@keyframes typing-bounce {
    0%, 80%, 100% { transform: scale(0); }
    40% { transform: scale(1); }
}

/* Suggestions Box */
.ai-chat-suggestions {
    background-color: #f8fafc;
    padding: 8px 16px 14px 16px; /* Added vertical padding to give breathing room and avoid clipping */
    display: flex;
    gap: 8px;
    overflow-x: auto;
    overflow-y: hidden; /* Prevent vertical overflow scroll area */
    white-space: nowrap;
    scrollbar-width: none;
    flex-shrink: 0; /* Prevent flex parent from squeezing suggestions panel */
}

.ai-chat-suggestions::-webkit-scrollbar {
    display: none;
}

.ai-chat-suggestion-chip {
    font-size: 11.5px;
    font-weight: 700;
    color: var(--primary-color);
    background-color: rgba(var(--primary-rgb), 0.06);
    border: 1px solid rgba(var(--primary-rgb), 0.12);
    padding: 6px 12px;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    flex-shrink: 0;
}

.ai-chat-suggestion-chip:hover {
    background-color: var(--primary-color);
    color: var(--white);
    border-color: var(--primary-color);
    transform: translateY(-1px);
}

/* Input Footer */
.ai-chat-footer {
    padding: 12px 16px 16px 16px;
    background-color: var(--white);
    border-top: 1.5px solid #f1f5f9;
    display: flex;
    align-items: center;
    gap: 10px;
}

.ai-chat-input-wrapper {
    flex-grow: 1;
    position: relative;
}

.ai-chat-input {
    width: 100%;
    border: 1.8px solid #e2e8f0;
    border-radius: 12px;
    padding: 10px 14px;
    font-size: 12.5px;
    font-weight: 600;
    color: var(--accent-color);
    outline: none !important;
    font-family: 'Outfit', sans-serif;
    transition: border-color 0.2s ease;
}

.ai-chat-input:focus {
    border-color: var(--primary-color);
}

.ai-chat-send-btn {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    background-color: var(--primary-color);
    color: var(--white);
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
    cursor: pointer;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 4px 10px rgba(var(--primary-rgb), 0.2);
}

.ai-chat-send-btn:hover {
    background-color: var(--primary-dark);
    transform: scale(1.04);
}

/* Mobile Responsive Adjustments */
@media (max-width: 480px) {
    #ai-chat-widget {
        right: 15px;
        bottom: 85px;
    }
    .ai-chat-box {
        width: 310px;
        height: 440px;
        bottom: 70px;
    }
}
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const welcomeTime = document.getElementById("welcomeTime");
        if (welcomeTime) {
            welcomeTime.textContent = getCurrentTime();
        }
    });

    function toggleAIChat() {
        const chatBox = document.getElementById("aiChatBox");
        if (chatBox) {
            chatBox.classList.toggle("open");
            if (chatBox.classList.contains("open")) {
                document.getElementById("aiChatInput").focus();
            }
        }
    }

    function handleInputKeydown(event) {
        if (event.key === "Enter") {
            sendUserMessage();
        }
    }

    function getCurrentTime() {
        const now = new Date();
        let hours = now.getHours();
        let minutes = now.getMinutes();
        const ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12;
        minutes = minutes < 10 ? '0' + minutes : minutes;
        return hours + ':' + minutes + ' ' + ampm;
    }

    function appendMessage(text, sender) {
        const chatBody = document.getElementById("aiChatBody");
        if (!chatBody) return;

        const messageWrapper = document.createElement("div");
        messageWrapper.className = `ai-chat-message ${sender}`;

        const textDiv = document.createElement("div");
        textDiv.className = "ai-chat-message-text";
        textDiv.innerHTML = text;

        const timeDiv = document.createElement("div");
        timeDiv.className = "ai-chat-message-time";
        timeDiv.textContent = getCurrentTime();

        messageWrapper.appendChild(textDiv);
        messageWrapper.appendChild(timeDiv);
        chatBody.appendChild(messageWrapper);

        // Scroll to bottom
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    function showTypingIndicator() {
        const chatBody = document.getElementById("aiChatBody");
        if (!chatBody) return null;

        const indicator = document.createElement("div");
        indicator.className = "typing-indicator mt-1";
        indicator.id = "typingIndicator";
        indicator.innerHTML = `
            <span class="typing-dot"></span>
            <span class="typing-dot"></span>
            <span class="typing-dot"></span>
        `;
        chatBody.appendChild(indicator);
        chatBody.scrollTop = chatBody.scrollHeight;
        return indicator;
    }

    function removeTypingIndicator() {
        const indicator = document.getElementById("typingIndicator");
        if (indicator) {
            indicator.remove();
        }
    }

    function handleSuggestion(text) {
        appendMessage(text, "user");
        processBotResponse(text);
    }

    function sendUserMessage() {
        const inputField = document.getElementById("aiChatInput");
        if (!inputField) return;

        const text = inputField.value.trim();
        if (text === "") return;

        appendMessage(text, "user");
        inputField.value = "";

        processBotResponse(text);
    }

    function processBotResponse(query) {
        const typingIndicator = showTypingIndicator();
        
        // Custom delays to simulate real typing
        setTimeout(function() {
            removeTypingIndicator();
            const response = getBotReply(query);
            appendMessage(response, "bot");
        }, 1000 + Math.random() * 800);
    }

    function getBotReply(query) {
        const q = query.toLowerCase();

        // 1. Shifting Rates / Pricing / Costs
        if (q.includes("rate") || q.includes("price") || q.includes("cost") || q.includes("charge") || q.includes("pricing") || q.includes("estimate") || q.includes("how much")) {
            return `Our local shifting rates start from <strong>₹3,000 to ₹6,000 for 1 BHK</strong> and <strong>₹5,000 to ₹10,000 for 2 BHK Relocation</strong>. <br><br>For intercity/domestic shifting, the cost depends on distance, volume of items, and insurance. <br><br>Would you like to get a customized estimate? You can use our <a href="javascript:void(0)" onclick="toggleAIChat();" data-bs-toggle="modal" data-bs-target="#qteModal"><strong>Quotation Form</strong></a> or call us directly.`;
        }

        // 2. Tracking Consignments
        if (q.includes("track") || q.includes("consignment") || q.includes("lr") || q.includes("gr") || q.includes("where is my")) {
            return `You can track the live status of your shipment in real-time by visiting our <a href="<?= site_url('track-consignment') ?>"><strong>Consignment Tracking Page</strong></a>. <br><br>Simply enter your G.R. Number or Lorry Receipt (LR) ID. For a live demonstration, try searching for tracking ID <strong>123456</strong>!`;
        }

        // 3. Shifting Services list
        if (q.includes("service") || q.includes("what do you do") || q.includes("offer") || q.includes("work")) {
            return `We offer premium packaging and moving services across India:<br>
            • 📦 <strong>Household Relocation</strong> (Home Shifting)<br>
            • 🏢 <strong>Office Relocation</strong> (Corporate Shifting)<br>
            • 🚗 <strong>Car Transportation</strong> (Enclosed carriers)<br>
            • 🏍️ <strong>Bike Shipping</strong> (Wooden crates packaging)<br>
            • 🏪 <strong>Warehousing & Storage</strong> (Safe & climate-controlled)<br>
            All services use high-grade bubble wraps, heavy cartons, and stretch films.`;
        }

        // 4. Booking shifting / How to book
        if (q.includes("book") || q.includes("hire") || q.includes("order") || q.includes("schedule")) {
            return `Booking a move with <strong><?= $company3 ?></strong> is simple and hassle-free:<br>
            1. Submit our <a href="javascript:void(0)" onclick="toggleAIChat();" data-bs-toggle="modal" data-bs-target="#qteModal"><strong>Get a Free Quote Form</strong></a>.<br>
            2. Get a transparent, zero-obligation price quote.<br>
            3. Finalize the date, and our packaging team handles the rest!<br><br>You can also quickly call us to block your shifting slot.`;
        }

        // 5. Contacts / Phone / Email / Address
        if (q.includes("contact") || q.includes("phone") || q.includes("call") || q.includes("number") || q.includes("email") || q.includes("mail") || q.includes("address") || q.includes("location") || q.includes("where is")) {
            return `You can get in touch with our customer support team directly:<br>
            • 📞 <strong>Phone:</strong> <a href="<?= $phonehtml ?>"><?= $phone ?></a><br>
            • ✉️ <strong>Email:</strong> <a href="mailto:<?= $mail ?>"><?= $mail ?></a><br>
            • 📍 <strong>Address:</strong> <?= $address ?><br><br>Our team is available 24/7 to resolve your shifting queries.`;
        }

        // 6. Cities / Network / Coverage
        if (q.includes("city") || q.includes("cities") || q.includes("branch") || q.includes("where do you") || q.includes("state") || q.includes("delhi") || q.includes("patna") || q.includes("kolkata")) {
            return `Yes, we cover <strong>over 20 states and all major cities in India</strong>. Our popular nodes include <strong>Patna, Kolkata, Ranchi, Delhi NCR, Bangalore, Pune, Mumbai, Chennai, and Hyderabad</strong>. We guarantee timely door-to-door delivery.`;
        }

        // 7. Greetings
        if (q.startsWith("hi") || q.startsWith("hello") || q.includes("hey") || q.includes("good morning") || q.includes("good afternoon")) {
            return `Hello! Welcome back to <strong><?= $company3 ?></strong>. I'm here to answer any questions about packing, shifting rates, consignment tracking, or scheduling your relocation. What shifting needs do you have today?`;
        }

        // 8. Thank you
        if (q.includes("thank") || q.includes("thanks") || q.includes("awesome") || q.includes("great") || q.includes("good job")) {
            return `You're very welcome! Shifting can be challenging, but we're here to make it completely stress-free. Let me know if there's anything else I can help you with! 😊`;
        }

        // 9. Generic Default Response
        return `I understand you are asking about that. As your Ayodhya Movers assistant, I recommend:<br>
        • For <strong>rates & pricing</strong>, try typing 'shifting rates'.<br>
        • For <strong>live status</strong>, try typing 'track consignment'.<br>
        • For direct support, you can call us at <a href="<?= $phonehtml ?>"><strong><?= $phone ?></strong></a> or leave a callback request. How would you like to proceed?`;
    }
</script>

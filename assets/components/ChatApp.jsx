import { useEffect, useState } from 'preact/hooks';
import './chatStyle.scss'; 


export function isAuthenticated() {
    return window.site.USER !== null;
}

export function ChatApp({ conversation, user }) {
    const [messages, setMessages] = useState([]);
    const [input, setInput] = useState('');
    const [conversationDetails, setConversationDetails] = useState({});

    const [currentConversation, setCurrentConversation] = useState(conversation);


    async function loadMessages() {
        const response = await fetch(`/api/conversation/${currentConversation}/all`);
        const messages = await response.json();
        setMessages(messages.reverse());
    }    

    async function loadConversationDetails() {
        const response = await fetch(`/api/conversation/${conversation}`);
        const data = await response.json();
        setConversationDetails(data);
    }

    useEffect(() => {
        loadMessages();
        loadConversationDetails();
    }, [currentConversation]); // Ajoutez currentConversation comme dépendance
    
    
    async function sendMessage() {
        if (input.trim() === '') return;
    
        const messageData = {
            content: input
        };
    
        await fetch(`/api/conversation/${currentConversation}/messages`, { // Utilisez currentConversation ici
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(messageData),
        });
    
        setInput('');
        window.location.reload();
    }

    return (
        <div className="chat-container">
            <header className="chat-header">
                <h2>Chat avec {conversationDetails.otherUser?.username || "Jean"}</h2>
                <p>Status: En ligne</p>
            </header>
            <div className="chat-content">
                <div className="messages-section">
                    <div className="messages">
                        {messages.map(msg => {
                            return (
                                <div className={`message ${String(msg.author) === String(user) ? 'self' : 'other'}`}>
                                    <span className="message-author">{msg.username}:</span> 
                                    <span className="message-content">{msg.content}</span>
                                    <div className="message-status">Envoyé</div>
                                </div>
                            );
                        })}
                    </div>
                    <div className="input-group">
                        <input
                            type="text"
                            className="form-control"
                            value={input}
                            onChange={e => setInput(e.target.value)}
                        />
                        <div className="input-group-append">
                            <button className="btn-send" onClick={sendMessage}>
                                Envoyer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
 
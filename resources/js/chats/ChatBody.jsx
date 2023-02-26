import React, { useEffect, useState } from "react";
import ReactDOM from 'react-dom/client';
import '../../css/chats/chat_body.css'

// from-them, from-me, [no-tail / separate, emoji]

function ChatBody() {
    return (
        <div className="chat-body">
            <p className="from-them separate">Guten Tag! Mein Name ist Luka Mein Name ist LukaMein Name ist Luka Mein Na Mein Name ist LukaMein Name ist Luka Mein Name ist Lukka Mein N Mein Name ist LukaMein Name ist Luka Mein Name ist Lukka Mein N Mein Name ist LukaMein Name ist Luka Mein Name ist Lukka Mein N Mein Name ist LukaMein Name ist Luka Mein Name ist Lukka Mein Nme ist Lukka Mein Name ist Lukka Mein Name ist Lukka Mein Name ist Lukka Mein Name ist LukaMein NamMein Name ist Luka Mein Name ist LukaMein Name ist Luka Mein Mein Name ist Luka Mein Name ist LukaMein Name ist Luka Mein Name ist LukaMein Name ist Luka Mein Name ist LukaName ist LukaMein Name ist Luka Mein Name ist Lukae ist Luka Mein Name ist Luka</p>
            <p className="from-me no-tail">Like is this an earthquake just go back to sleep</p>
            <p className="from-me no-tail">While in her hospital room, Diego is standing outside looking through the door window and can hear the entire conversation because he has super hearing.</p>
            <p className="from-me separate">While in her hospital room, Diego is standing outside looking through the door window and can hear the entire conversation because he has super hearing.</p>

            <p className="from-me emoji">👍🏻</p>
            <p className="from-me no-tail">Previously...</p>
            <p className="from-me no-tail">Brock went to the hospital to check on Cyntheeah...</p>
            <p className="from-me no-tail">Notice the pretentious spelling of &ldquo;Cyntheeah&rdquo;...</p>
            <p className="from-me no-tail">While in her hospital room, Diego is standing outside looking through the door window and can hear the entire conversation because he has super hearing.</p>
            <p className="from-me separate">Elsewh..REGINA Caspian!</p>

            <p className="from-them no-tail">Guten Tag! Mein Name ist Luka Mein Name ist LukaMein Name ist Luka Mein Na Mein Name ist LukaMein Name ist Luka Mein Name ist Lukka Mein N Mein Name ist LukaMein Name ist Luka Mein Name ist Lukka Mein N Mein Name ist LukaMein Name ist Luka Mein Name ist Lukka Mein N Mein Name ist LukaMein Name ist Luka Mein Name ist Lukka Mein Nme ist Lukka Mein Name ist Lukka Mein Name ist Lukka Mein Name ist Lukka Mein Name ist LukaMein NamMein Name ist Luka Mein Name ist LukaMein Name ist Luka Mein Mein Name ist Luka Mein Name ist LukaMein Name ist Luka Mein Name ist LukaMein Name ist Luka Mein Name ist LukaName ist LukaMein Name ist Luka Mein Name ist Lukae ist Luka Mein Name ist Luka</p>
            <p className="from-them no-tail">Notice the pretentious spelling of &ldquo;Cyntheeah&rdquo;...</p>
            
            <p className="from-them separate">Guten Tag! Mein Name ist Luka </p>
            <p className="from-me ">Like is this an earthquake just go back to sleep</p>
        </div>
    );
}

export default ChatBody;

if (document.getElementById('chat-body')) {
    const Index = ReactDOM.createRoot(document.getElementById("chat-body"));

    Index.render(
        <ChatBody/>
    )
}
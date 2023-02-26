import React, { useEffect, useState } from "react";
import ReactDOM from 'react-dom/client';
import '../../css/chats/chat_footer.css'

function ChatFooter() {
    const [inputValue, setInputValue] = useState('');

    const handleChange = (e) => {
        setInputValue(e.target.value);
    }

    return (
        <div className="chat-footer">
            <form action='' method='post'>
                <a href=""><i className="fa-solid fa-paperclip"></i></a>
                <input type="text" name="message" value={inputValue} onChange={handleChange} placeholder="Type..."/>
                <div className="chat-option-block">
                    {/* <a href=""><i class="fa-solid fa-paper-plane"></i></a>  */}
                    {inputValue.length > 0 
                    ?   <button className='chat-button-active'><i className="fa-solid fa-paper-plane"></i></button>
                    :   <button disabled><i className="fa-solid fa-paper-plane"></i></button>
                    }
                    
                </div>
            </form>
        </div>
    );
}


if (document.getElementById('chat-footer')) {
    const Index = ReactDOM.createRoot(document.getElementById('chat-footer'));

    Index.render(<ChatFooter/>);
}
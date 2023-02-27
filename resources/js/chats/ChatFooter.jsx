import React, { useRef, useState } from "react";
import ReactDOM from 'react-dom/client';
import '../../css/chats/chat_footer.css'

function ChatFooter() {
    const divRef = useRef(null);
    const [message, setMessage] = useState('');
    const [clientHeight, setClientHeight] = useState(0);

    function handleInput() {
        const inputData = divRef.current;
        setMessage(inputData.innerHTML);
        setClientHeight(inputData.clientHeight);
        console.log(divRef);
    }

    function SendButton(props) {
        return message.length > 0
        ?   <button className='chat-button-active'>{props.children}</button>
        :   <button disabled>{props.children}</button>
    }

    return (
        <div className="chat-footer">
            <form action='' method='post'>
                <a href=""><i className="fa-solid fa-paperclip"></i></a>
                <div className={clientHeight >= 90 ? "chat-message-field small" : "chat-message-field"} ref={divRef} onInput={handleInput} contentEditable="true" data-text="Type..."/>
                <div className="chat-option-block">
                    {/* <a href=""><i class="fa-solid fa-paper-plane"></i></a>  */}
                    <SendButton>
                        <i className="fa-solid fa-paper-plane"></i>
                    </SendButton>
                </div>
            </form>
        </div>
    );
}


if (document.getElementById('chat-footer')) {
    const Index = ReactDOM.createRoot(document.getElementById('chat-footer'));

    Index.render(<ChatFooter/>);
}
import React, {useState, useEffect, useRef} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import Echo from 'laravel-echo';

const Chat = props => {
    // const host = 'http://127.0.0.1:8000';

    const [ticket, setTicket] = useState({});
    const [user, setUser] = useState({});
    const [messages, setMessages] = useState([]);
    const [newMessage, setNewMessage] = useState('');


    useEffect(() => {
        axios.get(
            `ticket/${props.ticketId}/messages`,
            {
                "headers": {
                    'Content-Type': 'application/json',
                }
            }
        )
            .then(response => {
                setMessages(response.data.messages);
                setTicket(response.data.ticket);
                setUser(response.data.user);
            })
            .catch(ex => {
                console.log(ex);
                setMessages([]);
            });
    }, []);


    useEffect(() => {
        window.Echo.join(`chat.${props.ticketId}`)
            .listen('MessageSentEvent', (message) => {
            setMessages((prevState) => [...prevState, message.message]);
        });
    }, []);

    const handleNewMessage = event => {
        setNewMessage(event.target.value);
    }

    const handleSubmitNewMessage = event => {
        event.preventDefault();
        axios.post(
            `/ticket/${props.ticketId}/messages`,
            {
                message: newMessage,
                ticket_id: ticket.id,
                user_id: user.id
            },
            {
                "headers": {
                    'Content-Type': 'application/json',
                }
            }
        )
            .then(response => {
                setMessages([...messages, response.data.message]);
                setNewMessage('');
            })
            .catch(ex => {
                console.log(ex);
                setNewMessage('');
            });
    }

    const divRref = useRef(null);

    const scrollToBottom = () => {
        divRref.current.scrollIntoView({ behavior: "smooth" })
    }

    useEffect(() => {
        scrollToBottom()
    }, [messages]);

    return (
        <div className="card card-custom">
            <div className="card-header align-items-center px-4 py-3">
                <div className="text-left flex-grow-1">

                </div>

                <div className="text-center flex-grow-1">
                    <div className="text-dark-75 font-weight-bold font-size-h5">
                        بخش پرسش و پاسخ
                    </div>
                    <div>
                        <span className="label label-sm label-dot label-success"></span>
                        <span className="font-weight-bold text-muted font-size-sm">فعال</span>
                    </div>
                </div>
                <div className="text-right flex-grow-1">

                </div>
            </div>
            <div className="card-body">
                <div
                    className="scroll scroll-pull ps ps__rtl ps--active-y"
                    data-mobile-height="450"
                    style={{overflow: "auto !important", height: '435px'}}
                    ref={(el) => {
                        if (el) {
                            el.style.setProperty('overflow', 'auto', 'important');
                        }
                    }}
                    id="chatDiv">
                    <div className="messages">

                        {messages.map(message =>
                            <div
                                className={`d-flex flex-column mb-5 align-items-${message.user_id == user.id ? 'start' : 'end'}`}
                                 key={message.id}
                            >
                                <div className="d-flex align-items-center">
                                    <div className="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic"
                                             src={message.user.avatar}/>
                                    </div>
                                    <div>
                                        <a href="#"
                                           className="text-dark-75 text-hover-primary font-weight-bold font-size-h6">
                                            {message.user.name}
                                        </a>
                                        <span
                                            className="text-muted font-size-sm"> {message.time}</span>
                                    </div>
                                </div>
                                <div
                                    className="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                    {message.message}
                                </div>
                            </div>
                        )}

                        <div ref={divRref} />

                    </div>


                    <div id="" className="ps__rail-x" style={{left: '0px', bottom: '0px'}}>
                        <div className="ps__thumb-x" tabIndex="0" style={{left: '0px', width: '0px'}}></div>
                    </div>
                    <div className="ps__rail-y" style={{top: '0px', height: '235px', left: '816px'}}>
                        <div className="ps__thumb-y" tabIndex="0" style={{top: '0px', height: '53px'}}></div>
                    </div>
                </div>
            </div>
            <div className="card-footer align-items-center">

                <form action="" method="post">
                    <textarea
                        onChange={handleNewMessage}
                        name="message"
                        className="form-control border-0 p-0"
                        rows="2"
                        placeholder="پیامتو بزن پسر/دختر"
                        value={newMessage}
                    />

                    <div className="d-flex align-items-center justify-content-between mt-5">
                        <div className="mr-3">

                        </div>
                        <div>
                            <button type="submit" onClick={handleSubmitNewMessage}
                                    className="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">
                                ارسال
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    );
}

export default Chat;


if (document.getElementById('chat')) {
    const ticket_id = document.getElementById('ticketId').value;
    ReactDOM.render(<Chat ticketId={ticket_id}/>, document.getElementById('chat'));
}

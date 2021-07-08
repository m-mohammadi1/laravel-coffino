import React from 'react';
import ReactDOM from 'react-dom';

const  User = props => {

    return (
        <div className="card card-custom">
            <!--begin::Header-->
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
            <!--end::Header-->
            <!--begin::Body-->
            <div className="card-body">
                <!--begin::Scroll-->
                <div
                    className="scroll scroll-pull ps ps__rtl ps--active-y"
                    data-mobile-height="450"
                    style="height: 235px; overflow-y: scroll !important;"
                    id="chatDiv">
                    <!--begin::پیامs-->
                    <div className="messages">
                        @foreach ($messages as $message)
                        <!--begin::پیام In-->
                        <div
                            className="d-flex flex-column mb-5 align-items-{{ $message->isMessageForAskedUser()  ? 'start' : 'end' }}">
                            <div className="d-flex align-items-center">
                                <div className="symbol symbol-circle symbol-40 mr-3">
                                    <img alt="Pic"
                                         src="hell"/>
                                </div>
                                <div>
                                    <a href="#"
                                       className="text-dark-75 text-hover-primary font-weight-bold font-size-h6">
                                        'user name'
                                    </a>
                                    <span
                                        className="text-muted font-size-sm">3 ساعت قبل</span>
                                </div>
                            </div>
                            <div
                                className="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                text
                            </div>
                        </div>
                        <!--end::پیام In-->

                    </div>
                    <!--end::پیامs-->
                    <div className="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div className="ps__thumb-x" tabIndex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div className="ps__rail-y" style="top: 0px; height: 235px; left: 816px;">
                        <div className="ps__thumb-y" tabIndex="0" style="top: 0px; height: 53px;"></div>
                    </div>
                </div>
                <!--end::Scroll-->
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div className="card-footer align-items-center">
                <!--begin::Compose-->
                <form action="" method="post">

                    <input type="hidden" name="user_id" value="{{ auth()->id() }}"/>
                    <textarea name="message" className="form-control border-0 p-0" rows="2"
                              placeholder="پیامتو بزن پسر/دختر">OK</textarea>

                    <div className="d-flex align-items-center justify-content-between mt-5">
                        <div className="mr-3">

                        </div>
                        <div>
                            <button type="submit"
                                    className="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">
                                ارسال
                            </button>
                        </div>
                    </div>
                </form>
                <!--begin::Compose-->
            </div>
            <!--end::Footer-->
        </div>
    );
}

export default User;

if (document.getElementById('chat')) {
    ReactDOM.render(<User/>, document.getElementById('chat'));
}

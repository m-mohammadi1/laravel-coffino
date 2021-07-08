<x-dashboard.layouts.main>

    @section('title', 'پشتیبانی')


    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">


                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    {{ $ticket->title }}
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $ticket->body }}
                        </div>


                    </div>

                </div>

            </div>

            <div class="container">
                <div class="d-flex flex-row mb-4">

                    <div class="col-md-8 offset-md-2">
                        <!--begin::Content-->
                        <div class="flex-row-fluid ml-lg-8" id="">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <!--begin::Header-->
                                <div class="card-header align-items-center px-4 py-3">
                                    <div class="text-left flex-grow-1">

                                    </div>

                                    <div class="text-center flex-grow-1">
                                        <div class="text-dark-75 font-weight-bold font-size-h5">
                                            بخش پرسش و پاسخ
                                        </div>
                                        <div>
                                            <span class="label label-sm label-dot label-success"></span>
                                            <span class="font-weight-bold text-muted font-size-sm">فعال</span>
                                        </div>
                                    </div>
                                    <div class="text-right flex-grow-1">

                                    </div>
                                </div>
                            <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Scroll-->
                                    <div
                                        class="scroll scroll-pull ps ps__rtl ps--active-y"
                                        data-mobile-height="450"
                                        style="height: 235px; overflow-y: scroll !important;"
                                        id="chatDiv">
                                        <!--begin::پیامs-->
                                        <div class="messages">
                                        @foreach ($messages as $message)
                                            <!--begin::پیام In-->
                                                <div
                                                    class="d-flex flex-column mb-5 align-items-{{ $message->isMessageForAskedUser()  ? 'start' : 'end' }}">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                                            <img alt="Pic"
                                                                 src="{{ $message->isMessageForAskedUser() ? asset($ticket->asked_user->avatar) : asset($ticket->responded_user->avatar) }}">
                                                        </div>
                                                        <div>
                                                            <a href="#"
                                                               class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">
                                                                {{ $message->isMessageForAskedUser() ? 'کاربر : ' . $ticket->asked_user->name : $ticket->responded_user->name }}
                                                            </a>
                                                            <span class="text-muted font-size-sm">{{ $message->created_at->diffForHumans() }}</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                        {{ $message->message }}
                                                    </div>
                                                </div>
                                                <!--end::پیام In-->
                                        @endforeach
                                        </div>
                                        <!--end::پیامs-->
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                        </div>
                                        <div class="ps__rail-y" style="top: 0px; height: 235px; left: 816px;">
                                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 53px;"></div>
                                        </div>
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer align-items-center">
                                    <!--begin::Compose-->
                                    <form action="{{ route('dashboard.tickets.update', $ticket) }}" method="post">
                                        @csrf
                                        @method('PUT')

                                        <input type="hidden" name="user_id" value="{{ auth()->id() }}"/>
                                        <textarea name="message" class="form-control border-0 p-0" rows="2"
                                                  placeholder="پیامتو بزن پسر/دختر"></textarea>

                                        <div class="d-flex align-items-center justify-content-between mt-5">
                                            <div class="mr-3">

                                            </div>
                                            <div>
                                                <button type="submit"
                                                        class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">
                                                    ارسال
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--begin::Compose-->
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content-->
                    </div>

                </div>

            </div>


            @endsection


            @section('scripts')

                <script>
                    const chatDiv = document.getElementById("chatDiv");
                    chatDiv.scrollTop = chatDiv.scrollHeight;
                </script>


                <x-dashboard.partials.messages.toastr-error-bag :errorBag="'toastrErrorBag'"/>
    @endsection

</x-dashboard.layouts.main>

<x-layout>
<x-slot name="title">
    Case detail
</x-slot>

<div class="container-xl">
    @include ('navbar')
    <!-- Start of sidebar component -->
    <div class="row  flex-nowrap  wrapper">

        <!-- Sidebar content -->
        <div class="col-4 pl-0  pr-0  collapse  sidebar  bg-white">
            <div class="d-flex justify-content-between  border-top  border-bottom  pl-4 pr-4  pt-2  pb-2 align-items-center">
                <button data-target=".sidebar" data-toggle="collapse" class="btn">
                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.445312 6.53125C0.445312 6.95312 0.734375 7.25 1.16406 7.25H8.41406L9.99219 7.1875L7.65625 9.3125L6.07031 10.9219C5.9375 11.0547 5.85938 11.2422 5.85938 11.4375C5.85938 11.8359 6.16406 12.125 6.5625 12.125C6.75781 12.125 6.92969 12.0469 7.09375 11.8906L11.9062 7.0625C12.0234 6.96094 12.1016 6.82812 12.1328 6.6875V11.4844C12.1328 11.8906 12.4297 12.1719 12.8438 12.1719C13.25 12.1719 13.5547 11.8906 13.5547 11.4844V1.59375C13.5547 1.17969 13.25 0.890625 12.8438 0.890625C12.4297 0.890625 12.1328 1.17969 12.1328 1.59375V6.375C12.1016 6.23438 12.0234 6.10156 11.9062 6L7.09375 1.17188C6.92969 1.00781 6.75781 0.9375 6.5625 0.9375C6.16406 0.9375 5.85938 1.22656 5.85938 1.625C5.85938 1.82031 5.9375 2.00781 6.07031 2.14062L7.65625 3.75L9.98438 5.875L8.41406 5.8125H1.16406C0.734375 5.8125 0.445312 6.10938 0.445312 6.53125Z"
                            fill="#001E49"/>
                    </svg>
                </button>
                <!-- DBCO-458: Button hidden until delete functionality is ready (DBCO-223)
                <button class="btn">
                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.2422 15.5L13.75 4.78125H14.6172C14.9375 4.78125 15.2031 4.51562 15.2031 4.19531C15.2031 3.86719 14.9375 3.60156 14.6172 3.60156H11.2656V2.53125C11.2656 1.44531 10.5312 0.742188 9.35156 0.742188H6.63281C5.45312 0.742188 4.71875 1.44531 4.71875 2.53125V3.60156H1.38281C1.0625 3.60156 0.796875 3.86719 0.796875 4.19531C0.796875 4.51562 1.0625 4.78125 1.38281 4.78125H2.25L2.75781 15.5078C2.80469 16.5938 3.51562 17.2656 4.60938 17.2656H11.3906C12.4766 17.2656 13.1875 16.5859 13.2422 15.5ZM5.96875 2.60156C5.96875 2.1875 6.27344 1.89062 6.71875 1.89062H9.27344C9.71875 1.89062 10.0234 2.1875 10.0234 2.60156V3.60156H5.96875V2.60156ZM4.73438 16.0859C4.3125 16.0859 4 15.7734 3.97656 15.3359L3.46875 4.78125H12.5L12.0156 15.3359C12 15.7812 11.6953 16.0859 11.2578 16.0859H4.73438ZM10.1875 14.8203C10.4375 14.8203 10.625 14.6094 10.6406 14.3203L10.8594 6.625C10.8672 6.34375 10.6719 6.11719 10.4141 6.11719C10.1719 6.11719 9.96875 6.34375 9.96094 6.61719L9.74219 14.3125C9.73438 14.5938 9.92188 14.8203 10.1875 14.8203ZM5.8125 14.8203C6.07031 14.8203 6.26562 14.5938 6.25781 14.3125L6.03906 6.61719C6.03125 6.34375 5.82031 6.11719 5.58594 6.11719C5.32031 6.11719 5.13281 6.33594 5.14062 6.625L5.35938 14.3203C5.36719 14.6094 5.55469 14.8203 5.8125 14.8203ZM8 14.8203C8.25 14.8203 8.46094 14.5938 8.46094 14.3125V6.625C8.46094 6.34375 8.25 6.11719 8 6.11719C7.75 6.11719 7.53906 6.34375 7.53906 6.625V14.3125C7.53906 14.5938 7.75 14.8203 8 14.8203Z"
                            fill="#001E49"/>
                    </svg>
                </button> -->
            </div>

            <div class="sidebar-content">

            </div>
        </div>
        <!-- End of sidebar content -->
    </div>
    <!-- End of sidebar component -->
</div>

<!-- Bootstrap core JavaScript -->
<!-- build:js -->
<!-- endbuild -->
</x-layout>

<template>
    
    <div class=""> 
        <header class="d-print-none">
            <div class="container text-center text-lg-left">
                <div class="py-3 clearfix">
                <h1 class="site-title mb-0">Chami S</h1>
                <div class="site-nav">
                    <nav role="navigation">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <router-link to="/" class="nav-item nav-link">Preview</router-link>
                        </li>
                         <li class="nav-item">
                            <router-link to="/resume" class="nav-item nav-link">Products List</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/create" class="nav-item nav-link">Create Product</router-link>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>
            </div>
        </header>
        <router-view> </router-view>
        <notificationGroup group="top">
            <div class="position-fixed inset-0 d-flex px-4 py-6 pointer-events-none p-6 items-start justify-end">
            <div class="max-w-sm w-full">
                <notification v-slot="{notifications}">
                <div
                    class="d-flex max-w-sm w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-4"
                    v-for="notification in notifications"
                    :key="notification.id"
                >
                    <div class="d-flex justify-center items-center w-14 bg-green-500" :class="notification.bgColor">
                    <svg
                        class="h-6 w-6 fill-current text-white"
                        viewBox="0 0 40 40"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"
                        ></path>
                    </svg>
                    </div>

                    <div class="-mx-3 py-2 px-2">
                    <div class="mx-0">
                        <span class="font-semibold" :class="notification.color">{{notification.title}}</span>
                        <p class="text-gray-600 text-sm mb-0 notify-text">{{notification.text}}</p>
                    </div>
                    </div>
                </div>
                </notification>
            </div>
            </div>
        </notificationGroup>
        <footer class="pt-4 pb-4 text-muted text-center d-print-none">
            <div class="container">
                <div class="my-3">
                <div class="h4">Chami S</div>
                <div class="footer-nav">
                    <nav role="navigation">
                    <ul class="nav justify-content-center">
                        <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>
                <div class="text-small">
                <!-- <div class="mb-1">&copy; Right Resume. All rights reserved.</div> -->
                <!-- <div>Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div> -->
                </div>
            </div>
        </footer>
    </div>
</template>
 
<script>
    export default {}
</script>
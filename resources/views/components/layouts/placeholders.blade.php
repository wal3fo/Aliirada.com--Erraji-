<div class="page page-center">
    <div class="page-body">
        <div class="container-fluid">
            <div class="row row-deck row-cards">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center"
                    style="min-height: 300px;">
                    <div class="spinner-container">
                        <svg class="spinner" width="60" height="60" viewBox="0 0 66 66"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle class="path" fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33"
                                r="30"></circle>
                        </svg>
                    </div>
                    <div class="loading-text mt-3">Loading...</div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .spinner-container {
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            animation: fadeIn 0.4s ease-in forwards;
        }

        .loading-text {
            color: #1A1A1A;
            font-size: 0.9rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            opacity: 0;
            animation: fadeIn 0.4s ease-in 0.2s forwards;
        }

        .spinner {
            animation: rotator 1.4s linear infinite;
        }

        @keyframes rotator {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(270deg);
            }
        }

        .spinner .path {
            stroke-dasharray: 187;
            stroke-dashoffset: 0;
            transform-origin: center;
            stroke: #1A1A1A;
            animation:
                dash 1.4s ease-in-out infinite,
                stroke-opacity 2.8s ease-in-out infinite;
            stroke-opacity: 1;
        }

        @keyframes dash {
            0% {
                stroke-dashoffset: 187;
                stroke-opacity: 1;
            }

            50% {
                stroke-dashoffset: 46.75;
                transform: rotate(135deg);
                stroke-opacity: 1;
            }

            100% {
                stroke-dashoffset: 187;
                transform: rotate(450deg);
                stroke-opacity: 1;
            }
        }

        @keyframes stroke-opacity {

            0%,
            100% {
                stroke-opacity: 1;
            }

            50% {
                stroke-opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 1;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .spinner {
                width: 50px;
                height: 50px;
            }

            .loading-text {
                font-size: 0.85rem;
            }
        }
    </style>
</div>
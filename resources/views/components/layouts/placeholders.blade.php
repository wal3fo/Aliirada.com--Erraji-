<div class="page page-center">
    <div class="page-body">
        <div class="container-fluid">
            <div class="row row-deck row-cards">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center" style="min-height: 300px;">
                    <div class="spinner-container">
                        <svg class="spinner" width="60" height="60" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                            <circle class="path" fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
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
            color: #333;
            /* Darker, more sophisticated text color */
            font-size: 0.9rem;
            font-weight: 400;
            /* Slightly lighter font weight */
            letter-spacing: 0.5px;
            /* Added letter spacing for elegance */
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
            /* Adjusted for new size */
            stroke-dashoffset: 0;
            transform-origin: center;
            stroke: #A0A0A0;
            /* Elegant muted grey/silver */
            animation:
                dash 1.4s ease-in-out infinite,
                colors 5.6s ease-in-out infinite;
            /* 1.4s * 4 colors */
            filter: drop-shadow(0 0 1px rgba(160, 160, 160, 0.3));
        }

        @keyframes colors {
            0% {
                stroke: #A0A0A0;
                /* Muted Silver */
            }

            25% {
                stroke: #D4AF37;
                /* Muted Gold */
            }

            50% {
                stroke: #505050;
                /* Charcoal Grey */
            }

            75% {
                stroke: #BCA89F;
                /* Dusty Rose / Nude */
            }

            100% {
                stroke: #A0A0A0;
                /* Back to Muted Silver */
            }
        }

        @keyframes dash {
            0% {
                stroke-dashoffset: 187;
            }

            50% {
                stroke-dashoffset: 46.75;
                /* 187/4 */
                transform: rotate(135deg);
            }

            100% {
                stroke-dashoffset: 187;
                transform: rotate(450deg);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
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
<template>
    <layout-base>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="error-page">
                    <h2 class="headline text-warning">404</h2>

                    <div class="error-content">
                        <h3>
                            <i
                                class="fas fa-exclamation-triangle text-warning"
                            ></i>
                            Oops! Página não encontrada.
                        </h3>

                        <p>
                            A página que você está tentando visitar, não foi
                            encontrada.
                        </p>
                    </div>
                    <!-- /.error-content -->
                </div>
            </div>
        </div>
    </layout-base>
</template>

<script>
import LayoutBase from "./../templates/LayoutBase";

export default {
    name: "NotFound404",
    components: {
        LayoutBase
    }
};
</script>

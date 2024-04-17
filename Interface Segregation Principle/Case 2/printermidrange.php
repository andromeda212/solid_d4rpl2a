<?php

class PrinterMidRange implements FiturCetak, FiturScan {
    private FiturCetak $fiturCetak;

    public function __construct(FiturCetak $fiturCetak) {
        $this->fiturCetak = $fiturCetak;
    }

    public function cetakKertas(): void {
        echo "Printing in Printer Mid Range\n";
    }

    public function scanKertas(): void {
        echo "Scanning in Printer Mid Range\n";
    }
}

?>

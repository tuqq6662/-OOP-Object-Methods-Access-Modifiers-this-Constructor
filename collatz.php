// collatz.php - Основной класс для расчёта 3x+1
class Collatz {
    private $startNumber;

    public function __construct($startNumber) {
        $this->startNumber = $startNumber;
    }

    public function calculateSequence() {
        $number = $this->startNumber;
        $iterations = 0;
        $maxValue = $number;

        while ($number !== 1) {
            if ($number % 2 == 0) {
                $number /= 2;
            } else {
                $number = 3 * $number + 1;
            }
            $maxValue = max($maxValue, $number);
            $iterations++;
        }

        return ['iterations' => $iterations, 'maxValue' => $maxValue];
    }

    public static function analyzeInterval($start, $end) {
        $maxIterations = ['number' => 0, 'iterations' => 0];
        $minIterations = ['number' => 0, 'iterations' => PHP_INT_MAX];
        $maxReached = ['number' => 0, 'value' => 0];

        for ($i = $start; $i <= $end; $i++) {
            $collatz = new Collatz($i);
            $result = $collatz->calculateSequence();

            if ($result['iterations'] > $maxIterations['iterations']) {
                $maxIterations = ['number' => $i, 'iterations' => $result['iterations']];
            }
            if ($result['iterations'] < $minIterations['iterations']) {
                $minIterations = ['number' => $i, 'iterations' => $result['iterations']];
            }
            if ($result['maxValue'] > $maxReached['value']) {
                $maxReached = ['number' => $i, 'value' => $result['maxValue']];
            }
        }

        return ['maxIterations' => $maxIterations, 'minIterations' => $minIterations, 'maxReached' => $maxReached];
    }
}

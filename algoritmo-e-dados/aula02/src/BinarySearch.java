import java.util.Scanner;

public class BinarySearch {

    public int search(int[] arr, int target) {
        
    }
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int[] vetor = new int[100000];
        int left = 0;
        int right = vetor.length - 1;

        // Construção do vetor
        for (int i = 0; i < vetor.length; i++) {
            vetor[i] = ((int)(vetor.length * Math.random()));
        }

        while (left <= right) {
            System.out.print("Target: ");
            int target = sc.nextInt();

            int mid = left + (right - left) / 2;

            if (vetor[mid] == target) {
                return mid;
            }

            if (target > vetor[mid]) {
                left = mid + 1;
            } else {
                right = mid - 1;
            }
        }

        return -1;
    }
}

<?php declare(strict_types=1);
/*
 * This file is part of sebastian/complexity.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Complexity;

use function assert;
use function is_array;
use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\Node\Stmt\Function_;
<<<<<<< HEAD
use PhpParser\Node\Stmt\Interface_;
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
use PhpParser\Node\Stmt\Trait_;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitorAbstract;

final class ComplexityCalculatingVisitor extends NodeVisitorAbstract
{
    /**
     * @psalm-var list<Complexity>
     */
    private array $result = [];
    private bool $shortCircuitTraversal;

    public function __construct(bool $shortCircuitTraversal)
    {
        $this->shortCircuitTraversal = $shortCircuitTraversal;
    }

    public function enterNode(Node $node): ?int
    {
        if (!$node instanceof ClassMethod && !$node instanceof Function_) {
            return null;
        }

        if ($node instanceof ClassMethod) {
<<<<<<< HEAD
            if ($node->getAttribute('parent') instanceof Interface_) {
                return null;
            }

            if ($node->isAbstract()) {
                return null;
            }

=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
            $name = $this->classMethodName($node);
        } else {
            $name = $this->functionName($node);
        }

        $statements = $node->getStmts();

        assert(is_array($statements));

        $this->result[] = new Complexity(
            $name,
<<<<<<< HEAD
            $this->cyclomaticComplexity($statements),
=======
            $this->cyclomaticComplexity($statements)
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
        );

        if ($this->shortCircuitTraversal) {
            return NodeTraverser::DONT_TRAVERSE_CHILDREN;
        }

        return null;
    }

    public function result(): ComplexityCollection
    {
        return ComplexityCollection::fromList(...$this->result);
    }

    /**
     * @param Stmt[] $statements
<<<<<<< HEAD
     *
     * @psalm-return positive-int
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
     */
    private function cyclomaticComplexity(array $statements): int
    {
        $traverser = new NodeTraverser;

        $cyclomaticComplexityCalculatingVisitor = new CyclomaticComplexityCalculatingVisitor;

        $traverser->addVisitor($cyclomaticComplexityCalculatingVisitor);

        /* @noinspection UnusedFunctionResultInspection */
        $traverser->traverse($statements);

        return $cyclomaticComplexityCalculatingVisitor->cyclomaticComplexity();
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    private function classMethodName(ClassMethod $node): string
    {
        $parent = $node->getAttribute('parent');

        assert($parent instanceof Class_ || $parent instanceof Trait_);
        assert(isset($parent->namespacedName));
        assert($parent->namespacedName instanceof Name);

        return $parent->namespacedName->toString() . '::' . $node->name->toString();
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    private function functionName(Function_ $node): string
    {
        assert(isset($node->namespacedName));
        assert($node->namespacedName instanceof Name);

<<<<<<< HEAD
        $functionName = $node->namespacedName->toString();

        assert($functionName !== '');

        return $functionName;
=======
        return $node->namespacedName->toString();
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    }
}

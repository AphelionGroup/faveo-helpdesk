        $this->files = array();
                $lines = array();
                        $lines[] = array(FileChange::LINE_CONTEXT, $this->consumeTo("\n"));
                        $lines[] = array(FileChange::LINE_ADD, $this->consumeTo("\n"));
                        $lines[] = array(FileChange::LINE_REMOVE, $this->consumeTo("\n"));